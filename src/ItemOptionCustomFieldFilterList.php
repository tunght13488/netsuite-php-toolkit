<?php

namespace NetSuite\WebServices;

class ItemOptionCustomFieldFilterList
{
    /**
     * @access public
     * @var ItemOptionCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "ItemOptionCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
