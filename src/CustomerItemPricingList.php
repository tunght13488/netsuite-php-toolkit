<?php

namespace NetSuite\WebServices;

class CustomerItemPricingList
{
    /**
     * @access public
     * @var CustomerItemPricing[]
     */
    public $itemPricing;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "itemPricing" => "CustomerItemPricing[]",
        "replaceAll" => "boolean",
    );
}
