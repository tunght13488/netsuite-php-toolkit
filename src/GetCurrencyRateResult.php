<?php

namespace NetSuite\WebServices;

class GetCurrencyRateResult
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var CurrencyRateList
     */
    public $currencyRateList;

    static $paramtypesmap = array(
        "status" => "Status",
        "currencyRateList" => "CurrencyRateList",
    );
}
