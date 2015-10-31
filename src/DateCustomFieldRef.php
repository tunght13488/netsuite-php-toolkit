<?php

namespace NetSuite\WebServices;

class DateCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var dateTime
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "dateTime",
    );
}
