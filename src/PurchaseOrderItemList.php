<?php

namespace NetSuite\WebServices;

class PurchaseOrderItemList
{
    /**
     * @access public
     * @var PurchaseOrderItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "PurchaseOrderItem[]",
        "replaceAll" => "boolean",
    );
}
