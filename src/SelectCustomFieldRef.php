<?php

namespace NetSuite\WebServices;

class SelectCustomFieldRef extends CustomFieldRef
{
    /**
     * @access public
     * @var ListOrRecordRef
     */
    public $value;

    static $paramtypesmap = array(
        "value" => "ListOrRecordRef",
    );
}
