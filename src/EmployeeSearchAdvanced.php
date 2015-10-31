<?php

namespace NetSuite\WebServices;

class EmployeeSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var EmployeeSearch
     */
    public $criteria;

    /**
     * @access public
     * @var EmployeeSearchRow
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
        "criteria" => "EmployeeSearch",
        "columns" => "EmployeeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
