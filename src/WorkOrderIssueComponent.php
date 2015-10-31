<?php

namespace NetSuite\WebServices;

class WorkOrderIssueComponent
{
    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var integer
     */
    public $operationSequenceNumber;

    /**
     * @access public
     * @var float
     */
    public $quantity;

    /**
     * @access public
     * @var InventoryDetail
     */
    public $componentInventoryDetail;

    /**
     * @access public
     * @var integer
     */
    public $lineNumber;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "quantity" => "float",
        "componentInventoryDetail" => "InventoryDetail",
        "lineNumber" => "integer",
    );
}
