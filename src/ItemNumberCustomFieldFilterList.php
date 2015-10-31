<?php

namespace NetSuite\WebServices;

class ItemNumberCustomFieldFilterList
{
    /**
     * @access public
     * @var ItemNumberCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "ItemNumberCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
