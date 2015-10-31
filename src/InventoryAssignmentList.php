<?php

namespace NetSuite\WebServices;

class InventoryAssignmentList
{
    /**
     * @access public
     * @var InventoryAssignment[]
     */
    public $inventoryAssignment;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "inventoryAssignment" => "InventoryAssignment[]",
        "replaceAll" => "boolean",
    );
}
