<?php

namespace NetSuite\WebServices;

class BillingRatesMatrix
{
    /**
     * @access public
     * @var BillingRates[]
     */
    public $billingRates;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "billingRates" => "BillingRates[]",
        "replaceAll" => "boolean",
    );
}
