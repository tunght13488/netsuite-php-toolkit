<?php

namespace NetSuite\WebServices;

class ContactSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var ContactSearch
     */
    public $criteria;

    /**
     * @access public
     * @var ContactSearchRow
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
        "criteria" => "ContactSearch",
        "columns" => "ContactSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
