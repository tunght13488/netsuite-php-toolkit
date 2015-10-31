<?php

namespace NetSuite\WebServices;

class ManufacturingOperationTaskPredecessorList
{
    /**
     * @access public
     * @var ManufacturingOperationTaskPredecessor[]
     */
    public $manufacturingOperationTaskPredecessor;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "manufacturingOperationTaskPredecessor" => "ManufacturingOperationTaskPredecessor[]",
        "replaceAll" => "boolean",
    );
}
