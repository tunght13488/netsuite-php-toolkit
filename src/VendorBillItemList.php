<?php

namespace NetSuite\WebServices;

class VendorBillItemList
{
    /**
     * @access public
     * @var VendorBillItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "VendorBillItem[]",
        "replaceAll" => "boolean",
    );
}
