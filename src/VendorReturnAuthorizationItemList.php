<?php

namespace NetSuite\WebServices;

class VendorReturnAuthorizationItemList
{
    /**
     * @access public
     * @var VendorReturnAuthorizationItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "VendorReturnAuthorizationItem[]",
        "replaceAll" => "boolean",
    );
}
