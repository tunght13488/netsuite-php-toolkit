<?php

namespace NetSuite\WebServices;

class Pricing
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
    public $priceLevel;

    /**
     * @access public
     * @var float
     */
    public $discount;

    /**
     * @access public
     * @var PriceList
     */
    public $priceList;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "priceLevel" => "RecordRef",
        "discount" => "float",
        "priceList" => "PriceList",
    );
}
