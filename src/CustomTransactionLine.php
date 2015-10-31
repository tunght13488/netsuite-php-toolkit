<?php

namespace NetSuite\WebServices;

class CustomTransactionLine
{
    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var integer
     */
    public $line;

    /**
     * @access public
     * @var float
     */
    public $debit;

    /**
     * @access public
     * @var float
     */
    public $credit;

    /**
     * @access public
     * @var float
     */
    public $amount;

    /**
     * @access public
     * @var string
     */
    public $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var CustomFieldList
     */
    public $customFieldList;

    static $paramtypesmap = array(
        "account" => "RecordRef",
        "line" => "integer",
        "debit" => "float",
        "credit" => "float",
        "amount" => "float",
        "memo" => "string",
        "entity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
