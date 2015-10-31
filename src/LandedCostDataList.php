<?php

namespace NetSuite\WebServices;

class LandedCostDataList
{
    /**
     * @access public
     * @var LandedCostData[]
     */
    public $landedCostData;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "landedCostData" => "LandedCostData[]",
        "replaceAll" => "boolean",
    );
}
