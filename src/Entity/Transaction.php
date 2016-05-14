<?php

namespace Skaisser\Organizze\Entity;

/**
 * Transaction Entity.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
final class Transaction extends \Skaisser\Organizze\Entity\AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var date
     */
    public $date;

    /**
     * @var bool
     */
    public $paid;

    /**
     * @var int
     */
    public $amount_cents;

    /**
     * @var int
     */
    public $total_installments;

    /**
     * @var int
     */
    public $installment;

    /**
     * @var bool
     */
    public $recurring;

    /**
     * @var int
     */
    public $account_id;

    /**
     * @var int
     */
    public $category_id;

    /**
     * @var int
     */
    public $payee_id;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var int
     */
    public $credit_card_id;

    /**
     * @var int
     */
    public $credit_card_invoice_id;

    /**
     * @var int
     */
    public $paid_credit_card_id;

    /**
     * @var int
     */
    public $paid_credit_card_invoice_id;

    /**
     * @var int
     */
    public $oposite_transaction_id;

    /**
     * @var int
     */
    public $oposite_account_id;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var string
     */
    public $updated_at;
}
