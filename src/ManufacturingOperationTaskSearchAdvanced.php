<?php

namespace NetSuite\WebServices;

class ManufacturingOperationTaskSearchAdvanced extends SearchRecord
{
    /**
     * @access public
     * @var ManufacturingOperationTaskSearch
     */
    public $criteria;

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchRow
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
        "criteria" => "ManufacturingOperationTaskSearch",
        "columns" => "ManufacturingOperationTaskSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
