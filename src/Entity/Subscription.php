<?php

namespace Skaisser\Organizze\Entity;

/**
 * Subscription Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Subscription extends \Skaisser\Organizze\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $customer;

    /**
     * @var float
     */
    public $value;

    /**
     * @var float
     */
    public $grossValue;

    /**
     * @var string
     */
    public $nextDueDate;

    /**
     * @var string
     */
    public $cycle;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $updatePendingPayments;

    /**
     * @var array
     */
    public $payments = [];

    /**
     * @var string
     */
    public $creditCardHolderName;

    /**
     * @var string
     */
    public $creditCardNumber;

    /**
     * @var string
     */
    public $creditCardExpiryMonth;

    /**
     * @var string
     */
    public $creditCardExpiryYear;

    /**
     * @var string
     */
    public $creditCardCcv;

    /**
     * @var string
     */
    public $creditCardHolderFullName;

    /**
     * @var string
     */
    public $creditCardHolderEmail;

    /**
     * @var string
     */
    public $creditCardHolderCpfCnpj;

    /**
     * @var string
     */
    public $creditCardHolderAddress;

    /**
     * @var string
     */
    public $creditCardHolderAddressNumber;

    /**
     * @var string
     */
    public $creditCardHolderAddressComplement;

    /**
     * @var string
     */
    public $creditCardHolderProvince;

    /**
     * @var string
     */
    public $creditCardHolderCity;

    /**
     * @var string
     */
    public $creditCardHolderUf;

    /**
     * @var string
     */
    public $creditCardHolderPostalCode;

    /**
     * @var string
     */
    public $creditCardHolderPhone;

    /**
     * @var string
     */
    public $creditCardHolderPhoneDDD;

    /**
     * @var string
     */
    public $creditCardHolderMobilePhone;

    /**
     * @var string
     */
    public $creditCardHolderMobilePhoneDDD;

    /**
     * @var int
     */
    public $maxPayments;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @param string $nextDueDate
     */
    public function setNextDueDate($nextDueDate)
    {
        $this->nextDueDate = static::convertDateTime($nextDueDate);
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = static::convertDateTime($endDate);
    }
}
