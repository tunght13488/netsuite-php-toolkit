<?php

namespace NetSuite\WebServices;

class UnitsTypeSearchRow extends SearchRow
{
    /**
     * @access public
     * @var UnitsTypeSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "UnitsTypeSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
