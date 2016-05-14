<?php

namespace Skaisser\Organizze\Entity;

/**
 * City Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class City extends \Skaisser\Organizze\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ibgeCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $districtCode;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $state;
}
