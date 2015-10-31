<?php

namespace NetSuite\WebServices;

class PromotionCodeCurrency
{
    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    public $minimumOrderAmount;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "minimumOrderAmount" => "float",
    );
}
