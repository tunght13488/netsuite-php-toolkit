<?php

namespace NetSuite\WebServices;

class CustomFieldSubAccessList
{
    /**
     * @access public
     * @var CustomFieldSubAccess[]
     */
    public $subAccess;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "subAccess" => "CustomFieldSubAccess[]",
        "replaceAll" => "boolean",
    );
}
