<?php

namespace NetSuite\WebServices;

class InventoryDetail extends Record
{
    /**
     * @access public
     * @var InventoryAssignmentList
     */
    public $inventoryAssignmentList;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    static $paramtypesmap = array(
        "inventoryAssignmentList" => "InventoryAssignmentList",
        "customForm" => "RecordRef",
    );
}
