<?php

namespace NetSuite\WebServices;

class InventoryItemLocationsList
{
    /**
     * @access public
     * @var InventoryItemLocations[]
     */
    public $locations;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "locations" => "InventoryItemLocations[]",
        "replaceAll" => "boolean",
    );
}
