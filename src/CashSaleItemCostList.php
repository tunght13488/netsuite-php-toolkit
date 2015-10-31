<?php

namespace NetSuite\WebServices;

class CashSaleItemCostList
{
    /**
     * @access public
     * @var CashSaleItemCost[]
     */
    public $itemCost;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "itemCost" => "CashSaleItemCost[]",
        "replaceAll" => "boolean",
    );
}
