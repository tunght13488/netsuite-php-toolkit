<?php

namespace NetSuite\WebServices;

class EstimateShipGroupList
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
