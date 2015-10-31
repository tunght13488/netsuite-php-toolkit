<?php

namespace NetSuite\WebServices;

class ItemSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var ItemSearch
     */
    public $criteria;

    /**
     * @access public
     * @var ItemSearchRow
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
        "criteria" => "ItemSearch",
        "columns" => "ItemSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
