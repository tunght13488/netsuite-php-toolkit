<?php

namespace NetSuite\WebServices;

class VendorCreditExpenseList
{
    /**
     * @access public
     * @var VendorCreditExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "VendorCreditExpense[]",
        "replaceAll" => "boolean",
    );
}
