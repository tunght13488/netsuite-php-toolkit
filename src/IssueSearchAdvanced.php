<?php

namespace NetSuite\WebServices;

class IssueSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var IssueSearch
     */
    public $criteria;

    /**
     * @access public
     * @var IssueSearchRow
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
        "criteria" => "IssueSearch",
        "columns" => "IssueSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
