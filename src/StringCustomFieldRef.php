<?php

namespace NetSuite\WebServices;

class StringCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var string
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "string",
    );
}
