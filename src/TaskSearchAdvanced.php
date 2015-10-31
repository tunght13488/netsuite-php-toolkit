<?php

namespace NetSuite\WebServices;

class TaskSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var TaskSearch
     */
    public $criteria;

    /**
     * @access public
     * @var TaskSearchRow
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
        "criteria" => "TaskSearch",
        "columns" => "TaskSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
