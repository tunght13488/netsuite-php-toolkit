<?php

namespace NetSuite\WebServices;

class PricingGroupSearchRow extends SearchRow
{
    /**
     * @access public
     * @var PricingGroupSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PricingGroupSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
