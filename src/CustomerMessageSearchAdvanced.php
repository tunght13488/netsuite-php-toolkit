<?php

namespace NetSuite\WebServices;

class CustomerMessageSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var CustomerMessageSearch
     */
    public $criteria;

    /**
     * @access public
     * @var CustomerMessageSearchRow
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
        "criteria" => "CustomerMessageSearch",
        "columns" => "CustomerMessageSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
