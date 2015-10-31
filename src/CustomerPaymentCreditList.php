<?php

namespace NetSuite\WebServices;

class CustomerPaymentCreditList
{
    /**
     * @access public
     * @var CustomerPaymentCredit[]
     */
    public $credit;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "credit" => "CustomerPaymentCredit[]",
        "replaceAll" => "boolean",
    );
}
