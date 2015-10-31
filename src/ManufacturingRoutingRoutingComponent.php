<?php

namespace NetSuite\WebServices;

class ManufacturingRoutingRoutingComponent
{
    /**
     * @access public
     * @var string
     */
    public $itemName;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var float
     */
    public $yield;

    /**
     * @access public
     * @var float
     */
    public $bomQuantity;

    /**
     * @access public
     * @var float
     */
    public $quantity;

    /**
     * @access public
     * @var string
     */
    public $units;

    /**
     * @access public
     * @var RecordRef
     */
    public $operationDisplayText;

    /**
     * @access public
     * @var integer
     */
    public $operationSequenceNumber;

    /**
     * @access public
     * @var string
     */
    public $component;

    /**
     * @access public
     * @var string
     */
    public $item;

    static $paramtypesmap = array(
        "itemName" => "string",
        "description" => "string",
        "yield" => "float",
        "bomQuantity" => "float",
        "quantity" => "float",
        "units" => "string",
        "operationDisplayText" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "component" => "string",
        "item" => "string",
    );
}
