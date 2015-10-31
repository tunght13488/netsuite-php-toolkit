<?php

namespace NetSuite\WebServices;

class FileSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var FileSearch
     */
    public $criteria;

    /**
     * @access public
     * @var FileSearchRow
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
        "criteria" => "FileSearch",
        "columns" => "FileSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
