<?php

namespace NetSuite\WebServices;

class InventoryItemBinNumber
{
    /**
     * @access public
     * @var RecordRef
     */
    public $binNumber;

    /**
     * @access public
     * @var string
     */
    public $onHand;

    /**
     * @access public
     * @var string
     */
    public $onHandAvail;

    /**
     * @access public
     * @var string
     */
    public $location;

    /**
     * @access public
     * @var boolean
     */
    public $preferredBin;

    static $paramtypesmap = array(
        "binNumber" => "RecordRef",
        "onHand" => "string",
        "onHandAvail" => "string",
        "location" => "string",
        "preferredBin" => "boolean",
    );
}
