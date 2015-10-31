<?php

namespace NetSuite\WebServices;

class ReturnAuthorizationItemList
{
    /**
     * @access public
     * @var ReturnAuthorizationItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "ReturnAuthorizationItem[]",
        "replaceAll" => "boolean",
    );
}
