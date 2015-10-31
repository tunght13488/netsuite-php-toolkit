<?php

namespace NetSuite\WebServices;

class BinTransferInventoryList
{
    /**
     * @access public
     * @var BinTransferInventory[]
     */
    public $inventory;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "inventory" => "BinTransferInventory[]",
        "replaceAll" => "boolean",
    );
}
