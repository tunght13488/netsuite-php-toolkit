<?php

namespace NetSuite\WebServices;

class CheckItemList
{
    /**
     * @access public
     * @var CheckItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "CheckItem[]",
        "replaceAll" => "boolean",
    );
}
