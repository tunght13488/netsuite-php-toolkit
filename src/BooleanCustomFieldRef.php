<?php

namespace NetSuite\WebServices;

class BooleanCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var boolean
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "boolean",
    );
}
