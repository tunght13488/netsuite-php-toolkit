<?php

namespace NetSuite\WebServices;

class ManufacturingCostDetailList
{
    /**
     * @access public
     * @var ManufacturingCostDetail[]
     */
    public $manufacturingCostDetail;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "manufacturingCostDetail" => "ManufacturingCostDetail[]",
        "replaceAll" => "boolean",
    );
}
