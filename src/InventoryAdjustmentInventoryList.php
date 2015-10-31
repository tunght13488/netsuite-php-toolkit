<?php

namespace NetSuite\WebServices;

class InventoryAdjustmentInventoryList
{
    /**
     * @access public
     * @var InventoryAdjustmentInventory[]
     */
    public $inventory;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "inventory" => "InventoryAdjustmentInventory[]",
        "replaceAll" => "boolean",
    );
}
