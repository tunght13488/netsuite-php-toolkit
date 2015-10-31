<?php

namespace NetSuite\WebServices;

class PriceLevelSearch extends SearchRecord
{
    /**
     * @access public
     * @var PriceLevelSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PriceLevelSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
