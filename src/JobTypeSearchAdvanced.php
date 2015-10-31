<?php

namespace NetSuite\WebServices;

class JobTypeSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var JobTypeSearch
     */
    public $criteria;

    /**
     * @access public
     * @var JobTypeSearchRow
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
        "criteria" => "JobTypeSearch",
        "columns" => "JobTypeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
