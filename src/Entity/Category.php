<?php

namespace Skaisser\Organizze\Entity;

/**
 * Category Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Category extends \Skaisser\Organizze\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $color;

    /**
     * @var int
     */
    public $parent_id;
}
