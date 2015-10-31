<?php

namespace NetSuite\WebServices;

class CustomerGroupPricingList
{
    /**
     * @access public
     * @var CustomerGroupPricing[]
     */
    public $groupPricing;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "groupPricing" => "CustomerGroupPricing[]",
        "replaceAll" => "boolean",
    );
}
