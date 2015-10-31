<?php

namespace NetSuite\WebServices;

class TopicSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var TopicSearch
     */
    public $criteria;

    /**
     * @access public
     * @var TopicSearchRow
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
        "criteria" => "TopicSearch",
        "columns" => "TopicSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
