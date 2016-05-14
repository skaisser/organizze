<?php

namespace Skaisser\Organizze\Entity;

/**
 * Account Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Account extends \Skaisser\Organizze\Entity\AbstractEntity
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
    public $description;

    /**
     * @var bool
     */
    public $archived;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var string
     */
    public $updated_at;

    /**
     * @var bool
     */
    public $default;

    /**
     * @var string checking|savings|other
     */
    public $type;
}
