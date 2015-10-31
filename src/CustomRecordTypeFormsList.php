<?php

namespace NetSuite\WebServices;

class CustomRecordTypeFormsList
{
    /**
     * @access public
     * @var CustomRecordTypeForms[]
     */
    public $forms;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "forms" => "CustomRecordTypeForms[]",
        "replaceAll" => "boolean",
    );
}
