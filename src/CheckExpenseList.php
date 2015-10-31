<?php

namespace NetSuite\WebServices;

class CheckExpenseList
{
    /**
     * @access public
     * @var CheckExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "CheckExpense[]",
        "replaceAll" => "boolean",
    );
}
