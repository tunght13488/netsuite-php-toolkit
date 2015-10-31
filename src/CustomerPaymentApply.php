<?php

namespace NetSuite\WebServices;

class CustomerPaymentApply
{
    /**
     * @access public
     * @var boolean
     */
    public $apply;

    /**
     * @access public
     * @var integer
     */
    public $doc;

    /**
     * @access public
     * @var integer
     */
    public $line;

    /**
     * @access public
     * @var dateTime
     */
    public $applyDate;

    /**
     * @access public
     * @var string
     */
    public $job;

    /**
     * @access public
     * @var string
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $refNum;

    /**
     * @access public
     * @var float
     */
    public $total;

    /**
     * @access public
     * @var float
     */
    public $due;

    /**
     * @access public
     * @var string
     */
    public $currency;

    /**
     * @access public
     * @var dateTime
     */
    public $discDate;

    /**
     * @access public
     * @var float
     */
    public $discAmt;

    /**
     * @access public
     * @var float
     */
    public $disc;

    /**
     * @access public
     * @var float
     */
    public $amount;

    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "applyDate" => "dateTime",
        "job" => "string",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "discDate" => "dateTime",
        "discAmt" => "float",
        "disc" => "float",
        "amount" => "float",
    );
}
