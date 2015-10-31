<?php

namespace NetSuite\WebServices;

class ItemReceiptExpenseList
{
    /**
     * @access public
     * @var ItemReceiptExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "ItemReceiptExpense[]",
        "replaceAll" => "boolean",
    );
}
