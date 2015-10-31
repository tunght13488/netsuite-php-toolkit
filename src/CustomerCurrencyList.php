<?php

namespace NetSuite\WebServices;

class CustomerCurrencyList
{
    /**
     * @access public
     * @var CustomerCurrency[]
     */
    public $currency;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "currency" => "CustomerCurrency[]",
        "replaceAll" => "boolean",
    );
}
