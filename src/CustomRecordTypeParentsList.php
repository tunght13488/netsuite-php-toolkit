<?php

namespace NetSuite\WebServices;

class CustomRecordTypeParentsList
{
    /**
     * @access public
     * @var CustomRecordTypeParents[]
     */
    public $parents;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "parents" => "CustomRecordTypeParents[]",
        "replaceAll" => "boolean",
    );
}
