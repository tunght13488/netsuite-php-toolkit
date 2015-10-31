<?php

namespace NetSuite\WebServices;

class PurchaseOrderExpenseList
{
    /**
     * @access public
     * @var PurchaseOrderExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "PurchaseOrderExpense[]",
        "replaceAll" => "boolean",
    );
}
