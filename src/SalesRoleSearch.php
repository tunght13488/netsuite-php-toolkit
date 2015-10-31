<?php

namespace NetSuite\WebServices;

class SalesRoleSearch extends SearchRecord
{
    /**
     * @access public
     * @var SalesRoleSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "SalesRoleSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
