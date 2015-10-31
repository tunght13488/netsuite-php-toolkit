<?php

namespace NetSuite\WebServices;

class ItemCustomFieldFilterList
{
    /**
     * @access public
     * @var ItemCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "ItemCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
