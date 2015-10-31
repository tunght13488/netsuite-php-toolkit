<?php

namespace NetSuite\WebServices;

class RevRecTemplateSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var RevRecTemplateSearch
     */
    public $criteria;

    /**
     * @access public
     * @var RevRecTemplateSearchRow
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
        "criteria" => "RevRecTemplateSearch",
        "columns" => "RevRecTemplateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
