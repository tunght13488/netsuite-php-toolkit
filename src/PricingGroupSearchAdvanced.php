<?php

namespace NetSuite\WebServices;

class PricingGroupSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var PricingGroupSearch
     */
    public $criteria;

    /**
     * @access public
     * @var PricingGroupSearchRow
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
        "criteria" => "PricingGroupSearch",
        "columns" => "PricingGroupSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
