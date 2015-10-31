<?php

namespace NetSuite\WebServices;

class BudgetSearchRow extends SearchRow
{
    /**
     * @access public
     * @var BudgetSearchRowBasic
     */
    public $basic;

    static $paramtypesmap = array(
        "basic" => "BudgetSearchRowBasic",
    );
}
