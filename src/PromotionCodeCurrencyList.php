<?php

namespace NetSuite\WebServices;

class PromotionCodeCurrencyList
{
    /**
     * @access public
     * @var PromotionCodeCurrency[]
     */
    public $currency;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "currency" => "PromotionCodeCurrency[]",
        "replaceAll" => "boolean",
    );
}
