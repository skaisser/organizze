<?php

namespace Skaisser\Organizze\Entity;

/**
 * Base Meta Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Meta extends \Skaisser\Organizze\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var bool
     */
    public $hasMore;
}
