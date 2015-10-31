<?php

namespace NetSuite\WebServices;

class GetBudgetExchangeRateResult
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var BudgetExchangeRateList
     */
    public $budgetExchangeRateList;

    static $paramtypesmap = array(
        "status" => "Status",
        "budgetExchangeRateList" => "BudgetExchangeRateList",
    );
}
