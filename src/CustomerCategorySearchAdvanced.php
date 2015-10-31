<?php

namespace NetSuite\WebServices;

class CustomerCategorySearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var CustomerCategorySearch
     */
    public $criteria;

    /**
     * @access public
     * @var CustomerCategorySearchRow
     */
    public $columns;

    /**
     * @access public
     * @var string
     */
    public $savedSearchId;

    /**
     * @access public
     * @var string
     */
    public $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CustomerCategorySearch",
        "columns" => "CustomerCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
