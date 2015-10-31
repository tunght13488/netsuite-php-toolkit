<?php

namespace NetSuite\WebServices;

class LotNumberedInventoryItemLocationsList
{
    /**
     * @access public
     * @var LotNumberedInventoryItemLocations[]
     */
    public $locations;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "locations" => "LotNumberedInventoryItemLocations[]",
        "replaceAll" => "boolean",
    );
}
