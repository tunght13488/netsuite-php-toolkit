<?php

namespace NetSuite\WebServices;

class DepartmentSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var DepartmentSearch
     */
    public $criteria;

    /**
     * @access public
     * @var DepartmentSearchRow
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
        "criteria" => "DepartmentSearch",
        "columns" => "DepartmentSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
