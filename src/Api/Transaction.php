<?php

namespace Skaisser\Organizze\Api;

// Entities
use Skaisser\Organizze\Entity\Transaction as TransactionEntity;

/**
 * Transaction API Endpoint.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
class Transaction extends \Skaisser\Organizze\Api\AbstractApi
{
    /**
     * Get Transaction by Id.
     *
     * @param int $id Transaction Id
     *
     * @return TransactionEntity
     */
    public function getById($id)
    {
        $transaction = $this->adapter->get(sprintf('%s/transactions/%s', $this->endpoint, $id));

        $transaction = json_decode($transaction);

        return new TransactionEntity($transaction);
    }

    /**
     * Delete Transaction by Id.
     *
     * @param int $id Transaction Id
     *
     * @return bool
     */
    public function deleteById($id)
    {
        $transaction = $this->adapter->delete(sprintf('%s/transactions/%s', $this->endpoint, $id));

        $transaction = json_decode($transaction);

        return $transaction->deleted;
    }

    /**
     * Create a new Transaction.
     *
     * @param array $data
     *
     * @return bool
     */
    public function create(array $data)
    {
        $transaction = $this->adapter->post(sprintf('%s/transactions', $this->endpoint), $data);
        $transaction = json_decode($transaction);

        return new TransactionEntity($transaction);
    }

    /**
     * Update a Transaction.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data)
    {
        $transaction = $this->adapter->put(sprintf('%s/transactions/%s', $this->endpoint, $id), $data);
        $transaction = json_decode($transaction);

        return new TransactionEntity($transaction);
    }
}
