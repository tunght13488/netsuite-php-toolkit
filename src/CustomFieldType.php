<?php

namespace NetSuite\WebServices;

class CustomFieldType extends Record
{
    /**
     * @access public
     * @var CustomizationFieldType
     */
    public $fieldType;

    /**
     * @access public
     * @var string
     */
    public $scriptId;

    static $paramtypesmap = array(
        "fieldType" => "CustomizationFieldType",
        "scriptId" => "string",
    );
}
