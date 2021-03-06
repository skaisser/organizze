<?php

namespace Skaisser\Organizze;

// API's
use Skaisser\Organizze\Adapter\AdapterInterface;
use Skaisser\Organizze\Api\Category;
use Skaisser\Organizze\Api\Account;
use Skaisser\Organizze\Api\Transaction;

/**
 * Organizze API Wrapper.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
class Organizze
{
    /**
     * Adapter Interface.
     *
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter Adapter Instance
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * Get Category endpoint.
     *
     * @return Category
     */
    public function category()
    {
        return new Category($this->adapter);
    }

    public function account()
    {
        return new Account($this->adapter);
    }

    public function transaction()
    {
        return new Transaction($this->adapter);
    }
}
