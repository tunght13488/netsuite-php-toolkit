<?php

namespace NetSuite\WebServices;

class CustomRecordTypeSublistsList
{
    /**
     * @access public
     * @var CustomRecordTypeSublists[]
     */
    public $sublists;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "sublists" => "CustomRecordTypeSublists[]",
        "replaceAll" => "boolean",
    );
}
