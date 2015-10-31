<?php

namespace NetSuite\WebServices;

class ManufacturingRoutingRoutingComponentList
{
    /**
     * @access public
     * @var ManufacturingRoutingRoutingComponent[]
     */
    public $manufacturingRoutingRoutingComponent;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "manufacturingRoutingRoutingComponent" => "ManufacturingRoutingRoutingComponent[]",
        "replaceAll" => "boolean",
    );
}
