<?php

namespace NetSuite\WebServices;

class DepositPaymentList
{
    /**
     * @access public
     * @var DepositPayment[]
     */
    public $depositPayment;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "depositPayment" => "DepositPayment[]",
        "replaceAll" => "boolean",
    );
}
