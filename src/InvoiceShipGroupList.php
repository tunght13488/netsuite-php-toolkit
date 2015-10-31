<?php

namespace NetSuite\WebServices;

class InvoiceShipGroupList
{
    /**
     * @access public
     * @var TransactionShipGroup[]
     */
    public $shipGroup;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "shipGroup" => "TransactionShipGroup[]",
        "replaceAll" => "boolean",
    );
}
