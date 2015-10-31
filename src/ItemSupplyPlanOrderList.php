<?php

namespace NetSuite\WebServices;

class ItemSupplyPlanOrderList
{
    /**
     * @access public
     * @var ItemSupplyPlanOrder[]
     */
    public $itemSupplyPlanOrder;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "itemSupplyPlanOrder" => "ItemSupplyPlanOrder[]",
        "replaceAll" => "boolean",
    );
}
