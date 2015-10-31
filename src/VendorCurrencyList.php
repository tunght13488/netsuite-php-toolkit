<?php

namespace NetSuite\WebServices;

class VendorCurrencyList
{
    /**
     * @access public
     * @var VendorCurrency[]
     */
    public $vendorCurrency;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "vendorCurrency" => "VendorCurrency[]",
        "replaceAll" => "boolean",
    );
}
