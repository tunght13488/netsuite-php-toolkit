<?php

namespace NetSuite\WebServices;

class RevRecScheduleSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var RevRecScheduleSearch
     */
    public $criteria;

    /**
     * @access public
     * @var RevRecScheduleSearchRow
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
        "criteria" => "RevRecScheduleSearch",
        "columns" => "RevRecScheduleSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
