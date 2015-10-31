<?php

namespace NetSuite\WebServices;

class TermSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var TermSearch
     */
    public $criteria;

    /**
     * @access public
     * @var TermSearchRow
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
        "criteria" => "TermSearch",
        "columns" => "TermSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
