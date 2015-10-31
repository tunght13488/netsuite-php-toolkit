<?php

namespace NetSuite\WebServices;

class CustomListCustomValueList
{
    /**
     * @access public
     * @var CustomListCustomValue[]
     */
    public $customValue;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "customValue" => "CustomListCustomValue[]",
        "replaceAll" => "boolean",
    );
}
