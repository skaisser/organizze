<?php

namespace Skaisser\Organizze\Api;

use Skaisser\Organizze\Adapter\AdapterInterface;
use Skaisser\Organizze\Entity\Meta;

/**
 * Abstract API.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
abstract class AbstractApi
{
    /**
     * Endpoint Produção.
     *
     * @var string
     */
    const ENDPOINT_PRODUCAO = 'https://api.organizze.com.br/rest/v2';

    /**
     * Http Adapter Instance.
     *
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Api Endpoint.
     *
     * @var string
     */
    protected $endpoint;

    /**
     * @var Meta
     */
    protected $meta;

    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter Adapter Instance
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
        $this->endpoint = static::ENDPOINT_PRODUCAO;
    }

    /**
     * Extract results meta.
     *
     * @param \stdClass $data Meta data
     *
     * @return Meta
     */
    protected function extractMeta(\StdClass $data)
    {
        $this->meta = new Meta($data);

        return $this->meta;
    }

    /**
     * Return results meta.
     *
     * @return Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }
}
