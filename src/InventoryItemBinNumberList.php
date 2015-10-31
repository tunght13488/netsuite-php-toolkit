<?php

namespace NetSuite\WebServices;

class InventoryItemBinNumberList
{
    /**
     * @access public
     * @var InventoryItemBinNumber[]
     */
    public $binNumber;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "binNumber" => "InventoryItemBinNumber[]",
        "replaceAll" => "boolean",
    );
}
