<?php

namespace NetSuite\WebServices;

class ExpenseCategoryRatesList
{
    /**
     * @access public
     * @var ExpenseCategoryRates[]
     */
    public $expenseCategoryRates;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "expenseCategoryRates" => "ExpenseCategoryRates[]",
        "replaceAll" => "boolean",
    );
}
