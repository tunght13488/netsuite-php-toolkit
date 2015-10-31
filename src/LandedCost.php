<?php

namespace NetSuite\WebServices;

class LandedCost extends Record
{
    /**
     * @access public
     * @var LandedCostDataList
     */
    public $landedCostDataList;

    static $paramtypesmap = array(
        "landedCostDataList" => "LandedCostDataList",
    );
}
