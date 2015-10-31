<?php

namespace NetSuite\WebServices;

class CurrencyRate_core
{
    /**
     * @access public
     * @var RecordRef
     */
    public $baseCurrency;

    /**
     * @access public
     * @var RecordRef
     */
    public $fromCurrency;

    /**
     * @access public
     * @var float
     */
    public $exchangeRate;

    /**
     * @access public
     * @var dateTime
     */
    public $effectiveDate;

    static $paramtypesmap = array(
        "baseCurrency" => "RecordRef",
        "fromCurrency" => "RecordRef",
        "exchangeRate" => "float",
        "effectiveDate" => "dateTime",
    );
}
