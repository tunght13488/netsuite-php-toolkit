<?php

namespace NetSuite\WebServices;

class GetCurrencyRateRequest
{
    /**
     * @access public
     * @var CurrencyRateFilter
     */
    public $currencyRateFilter;

    static $paramtypesmap = array(
        "currencyRateFilter" => "CurrencyRateFilter",
    );
}
