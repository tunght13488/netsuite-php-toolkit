<?php

namespace NetSuite\WebServices;

class CustomerItemPricing
{
    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $level;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    public $price;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "level" => "RecordRef",
        "currency" => "RecordRef",
        "price" => "float",
    );
}
