<?php

namespace NetSuite\WebServices;

class MultiSelectCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var ListOrRecordRef[]
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "ListOrRecordRef[]",
    );
}
