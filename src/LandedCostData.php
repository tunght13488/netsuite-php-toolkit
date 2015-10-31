<?php

namespace NetSuite\WebServices;

class LandedCostData
{
    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

    /**
     * @access public
     * @var float
     */
    public $amount;

    static $paramtypesmap = array(
        "costCategory" => "RecordRef",
        "amount" => "float",
    );
}
