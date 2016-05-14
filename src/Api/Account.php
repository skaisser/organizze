<?php

namespace Skaisser\Organizze\Api;

// Entities
use Skaisser\Organizze\Entity\Account as AccountEntity;

/**
 * Account API Endpoint.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
class Account extends \Skaisser\Organizze\Api\AbstractApi
{
    /**
     * Get all Accounts.
     *
     * @return array Account Array
     */
    public function getAll()
    {
        $accounts = $this->adapter->get(sprintf('%s/accounts', $this->endpoint));

        $accounts = json_decode($accounts);

        return array_map(function ($account) {
            return new AccountEntity($account);
        }, $accounts);
    }

    /**
     * Get Account by Id.
     *
     * @param int $id Account Id
     *
     * @return AccountEntity
     */
    public function getById($id)
    {
        $account = $this->adapter->get(sprintf('%s/accounts/%s', $this->endpoint, $id));
        $account = json_decode($account);

        return new AccountEntity($account);
    }

    /**
     * Create a new Account.
     *
     * @param array $data
     *
     * @return bool
     */
    public function create(array $data)
    {
        $account = $this->adapter->post(sprintf('%s/accounts', $this->endpoint), $data);
        $account = json_decode($account);

        return new AccountEntity($account);
    }

    /**
     * Update an Account.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data)
    {
        $account = $this->adapter->put(sprintf('%s/accounts/%s', $this->endpoint, $id), $data);
        $account = json_decode($account);

        return new AccountEntity($account);
    }
}
