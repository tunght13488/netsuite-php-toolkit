<?php

namespace NetSuite\WebServices;

class ManufacturingCostTemplateSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var ManufacturingCostTemplateSearch
     */
    public $criteria;

    /**
     * @access public
     * @var ManufacturingCostTemplateSearchRow
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
        "criteria" => "ManufacturingCostTemplateSearch",
        "columns" => "ManufacturingCostTemplateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
