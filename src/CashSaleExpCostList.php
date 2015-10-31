<?php

namespace NetSuite\WebServices;

class CashSaleExpCostList
{
    /**
     * @access public
     * @var CashSaleExpCost[]
     */
    public $expCost;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expCost" => "CashSaleExpCost[]",
        "replaceAll" => "boolean",
    );
}
