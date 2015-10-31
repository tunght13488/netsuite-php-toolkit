<?php

namespace NetSuite\WebServices;

class EntityCustomFieldFilterList
{
    /**
     * @access public
     * @var EntityCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "EntityCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
