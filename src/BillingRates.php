<?php

namespace NetSuite\WebServices;

class BillingRates
{
    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingClass;

    /**
     * @access public
     * @var RateList
     */
    public $rateList;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "billingClass" => "RecordRef",
        "rateList" => "RateList",
    );
}
