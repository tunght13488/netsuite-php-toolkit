<?php

namespace NetSuite\WebServices;

class PurchaseRequisitionItemList
{
    /**
     * @access public
     * @var PurchaseRequisitionItem[]
     */
    public $purchaseRequisitionItem;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "purchaseRequisitionItem" => "PurchaseRequisitionItem[]",
        "replaceAll" => "boolean",
    );
}
