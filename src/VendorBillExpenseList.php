<?php

namespace NetSuite\WebServices;

class VendorBillExpenseList
{
    /**
     * @access public
     * @var VendorBillExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "VendorBillExpense[]",
        "replaceAll" => "boolean",
    );
}
