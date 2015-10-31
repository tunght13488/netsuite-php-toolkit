<?php

namespace NetSuite\WebServices;

class CustomRecordTypeManagersList
{
    /**
     * @access public
     * @var CustomRecordTypeManagers[]
     */
    public $managers;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "managers" => "CustomRecordTypeManagers[]",
        "replaceAll" => "boolean",
    );
}
