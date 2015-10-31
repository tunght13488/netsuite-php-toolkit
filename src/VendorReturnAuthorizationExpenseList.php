<?php

namespace NetSuite\WebServices;

class VendorReturnAuthorizationExpenseList
{
    /**
     * @access public
     * @var VendorReturnAuthorizationExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "VendorReturnAuthorizationExpense[]",
        "replaceAll" => "boolean",
    );
}
