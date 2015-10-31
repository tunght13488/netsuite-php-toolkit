<?php

namespace NetSuite\WebServices;

class BudgetSearch extends SearchRecord
{
    /**
     * @access public
     * @var BudgetSearchBasic
     */
    public $basic;

    static $paramtypesmap = array(
        "basic" => "BudgetSearchBasic",
    );
}
