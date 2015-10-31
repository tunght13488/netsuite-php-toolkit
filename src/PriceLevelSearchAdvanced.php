<?php

namespace NetSuite\WebServices;

class PriceLevelSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var PriceLevelSearch
     */
    public $criteria;

    /**
     * @access public
     * @var PriceLevelSearchRow
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
        "criteria" => "PriceLevelSearch",
        "columns" => "PriceLevelSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
