<?php

namespace NetSuite\WebServices;

class CustomRecordCustomFieldFilterList
{
    /**
     * @access public
     * @var CustomRecordCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "CustomRecordCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
