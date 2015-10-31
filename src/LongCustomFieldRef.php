<?php

namespace NetSuite\WebServices;

class LongCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var integer
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "integer",
    );
}
