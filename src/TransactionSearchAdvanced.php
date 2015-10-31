<?php

namespace NetSuite\WebServices;

class TransactionSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var TransactionSearch
     */
    public $criteria;

    /**
     * @access public
     * @var TransactionSearchRow
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
        "criteria" => "TransactionSearch",
        "columns" => "TransactionSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
