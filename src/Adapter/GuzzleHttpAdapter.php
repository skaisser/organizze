<?php

namespace Skaisser\Organizze\Adapter;

// Organizze
use Skaisser\Organizze\Exception\HttpException;
// GuzzleHttp
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

/**
 * Guzzle Http Adapter.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
class GuzzleHttpAdapter implements AdapterInterface
{
    /**
     * Client Instance.
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * Command Response.
     *
     * @var Response|GuzzleHttp\Message\ResponseInterface
     */
    protected $response;

    /**
     * Constructor.
     *
     * @param string               $email  Access E-mail
     * @param string               $token  Access Token
     * @param ClientInterface|null $client Client Instance
     */
    public function __construct($email, $token, ClientInterface $client = null)
    {
        if (version_compare(ClientInterface::VERSION, '6') === 1) {
            $this->client = $client ?: new Client(['auth' => [$email, $token]]);
        } else {
            $this->client = $client ?: new Client();

            $this->client->setAuth($email, $token);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($url)
    {
        try {
            $this->response = $this->client->get($url);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function delete($url)
    {
        try {
            $this->response = $this->client->delete($url);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function put($url, $content = '')
    {
        $options = [];
        $options['form_params'] = $content;

        try {
            $this->response = $this->client->put($url, $options);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function post($url, $content = '')
    {
        $options = [];
        $options['form_params'] = $content;

        try {
            $this->response = $this->client->post($url, $options);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();

            $this->handleError();
        }

        return $this->response->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestResponseHeaders()
    {
        if (null === $this->response) {
            return;
        }

        return [
            'reset' => (int) (string) $this->response->getHeader('RateLimit-Reset'),
            'remaining' => (int) (string) $this->response->getHeader('RateLimit-Remaining'),
            'limit' => (int) (string) $this->response->getHeader('RateLimit-Limit'),
        ];
    }

    /**
     * @throws HttpException
     */
    protected function handleError()
    {
        $body = (string) $this->response->getBody();
        $code = (int) $this->response->getStatusCode();
        $content = json_decode($body);
        $error = $content->errors[0];

        throw new HttpException(isset($error) ? $error->description : 'Request not processed.', $code);
    }
}
