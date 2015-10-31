<?php

namespace NetSuite\WebServices;

class CrmCustomFieldFilterList
{
    /**
     * @access public
     * @var CrmCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "CrmCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
