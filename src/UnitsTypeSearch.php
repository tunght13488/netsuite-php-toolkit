<?php

namespace NetSuite\WebServices;

class UnitsTypeSearch extends SearchRecord
{
    /**
     * @access public
     * @var UnitsTypeSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "UnitsTypeSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
