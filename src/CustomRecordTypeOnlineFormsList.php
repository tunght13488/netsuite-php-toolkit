<?php

namespace NetSuite\WebServices;

class CustomRecordTypeOnlineFormsList
{
    /**
     * @access public
     * @var CustomRecordTypeOnlineForms[]
     */
    public $onlineForms;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "onlineForms" => "CustomRecordTypeOnlineForms[]",
        "replaceAll" => "boolean",
    );
}
