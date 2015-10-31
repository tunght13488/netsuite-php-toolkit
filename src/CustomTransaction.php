<?php

namespace NetSuite\WebServices;

class CustomTransaction extends Record
{
    /**
     * @access public
     * @var dateTime
     */
    public $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $tranType;

    /**
     * @access public
     * @var string
     */
    public $tranId;

    /**
     * @access public
     * @var float
     */
    public $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $voidJournal;

    /**
     * @access public
     * @var float
     */
    public $exchangeRate;

    /**
     * @access public
     * @var dateTime
     */
    public $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var string
     */
    public $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $tranStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var CustomTransactionLineList
     */
    public $lineList;

    /**
     * @access public
     * @var CustomTransactionAccountingBookDetailList
     */
    public $accountingBookDetailList;

    /**
     * @access public
     * @var CustomFieldList
     */
    public $customFieldList;

    /**
     * @access public
     * @var string
     */
    public $internalId;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranType" => "RecordRef",
        "tranId" => "string",
        "total" => "float",
        "currency" => "RecordRef",
        "voidJournal" => "RecordRef",
        "exchangeRate" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "lineList" => "CustomTransactionLineList",
        "accountingBookDetailList" => "CustomTransactionAccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
