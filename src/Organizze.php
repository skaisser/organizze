<?php

namespace Skaisser\Organizze;

// API's
use Skaisser\Organizze\Adapter\AdapterInterface;

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
}
