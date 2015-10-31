<?php

namespace NetSuite\WebServices;

class ExpenseReportExpenseList
{
    /**
     * @access public
     * @var ExpenseReportExpense[]
     */
    public $expense;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expense" => "ExpenseReportExpense[]",
        "replaceAll" => "boolean",
    );
}
