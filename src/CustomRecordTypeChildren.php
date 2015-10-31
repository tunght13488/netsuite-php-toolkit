<?php

namespace NetSuite\WebServices;

class CustomRecordTypeChildren
{
    /**
     * @access public
     * @var string
     */
    public $childDescr;

    /**
     * @access public
     * @var RecordRef
     */
    public $childTab;

    static $paramtypesmap = array(
        "childDescr" => "string",
        "childTab" => "RecordRef",
    );
}
