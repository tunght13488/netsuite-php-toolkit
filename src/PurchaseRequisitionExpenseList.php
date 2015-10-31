<?php

namespace NetSuite\WebServices;

class PurchaseRequisitionExpenseList
{
    /**
     * @access public
     * @var PurchaseRequisitionExpense[]
     */
    public $purchaseRequisitionExpense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "purchaseRequisitionExpense" => "PurchaseRequisitionExpense[]",
        "replaceAll" => "boolean",
    );
}
