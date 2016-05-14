<?php

namespace Skaisser\Organizze\Entity;

/**
 * Customer Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Customer extends \Skaisser\Organizze\Entity\AbstractEntity
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
    public $email;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressNumber;

    /**
     * @var string
     */
    public $complement;

    /**
     * @var string
     */
    public $province;

    /**
     * @var bool
     */
    public $foreignCustomer;

    /**
     * @var bool
     */
    public $notificationDisabled;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $cpfCnpj;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var array
     */
    public $subscriptions = [];

    /**
     * @var array
     */
    public $payments = [];

    /**
     * @var array
     */
    public $notifications = [];
}
