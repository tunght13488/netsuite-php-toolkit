<?php

namespace NetSuite\WebServices;

class ItemSupplyPlanSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var ItemSupplyPlanSearch
     */
    public $criteria;

    /**
     * @access public
     * @var ItemSupplyPlanSearchRow
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
        "criteria" => "ItemSupplyPlanSearch",
        "columns" => "ItemSupplyPlanSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
