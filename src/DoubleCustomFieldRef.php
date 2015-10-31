<?php

namespace NetSuite\WebServices;

class DoubleCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var float
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "float",
    );
}
