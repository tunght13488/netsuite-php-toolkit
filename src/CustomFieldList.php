<?php

namespace NetSuite\WebServices;

class CustomFieldList
{
    /**
     * @access public
     * @var CustomFieldRef[]
     */
    public $customField;

    static $paramtypesmap = array(
        "customField" => "CustomFieldRef[]",
    );
}
