<?php

namespace NetSuite\WebServices;

class VendorCreditItemList
{
    /**
     * @access public
     * @var VendorCreditItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "VendorCreditItem[]",
        "replaceAll" => "boolean",
    );
}
