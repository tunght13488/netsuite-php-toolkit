<?php

namespace NetSuite\WebServices;

class InventoryTransferInventoryList
{
    /**
     * @access public
     * @var InventoryTransferInventory[]
     */
    public $inventory;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "inventory" => "InventoryTransferInventory[]",
        "replaceAll" => "boolean",
    );
}
