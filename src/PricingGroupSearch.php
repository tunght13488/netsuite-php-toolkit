<?php

namespace NetSuite\WebServices;

class PricingGroupSearch extends SearchRecord
{
    /**
     * @access public
     * @var PricingGroupSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PricingGroupSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
