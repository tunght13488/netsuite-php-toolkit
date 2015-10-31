<?php

namespace NetSuite\WebServices;

class CurrencyRateSearch extends SearchRecord
{
    /**
     * @access public
     * @var CurrencyRateSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CurrencyRateSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
