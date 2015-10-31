<?php

namespace NetSuite\WebServices;

class SalesRoleSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var SalesRoleSearch
     */
    public $criteria;

    /**
     * @access public
     * @var SalesRoleSearchRow
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
        "criteria" => "SalesRoleSearch",
        "columns" => "SalesRoleSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
