<?php

namespace NetSuite\WebServices;

class CurrencyRateSearchRow extends SearchRow
{
    /**
     * @access public
     * @var CurrencyRateSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CurrencyRateSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
