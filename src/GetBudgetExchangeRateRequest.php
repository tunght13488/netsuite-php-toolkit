<?php

namespace NetSuite\WebServices;

class GetBudgetExchangeRateRequest
{
    /**
     * @access public
     * @var BudgetExchangeRateFilter
     */
    public $budgetExchangeRateFilter;

    static $paramtypesmap = array(
        "budgetExchangeRateFilter" => "BudgetExchangeRateFilter",
    );
}
