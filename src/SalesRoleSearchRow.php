<?php

namespace NetSuite\WebServices;

class SalesRoleSearchRow extends SearchRow
{
    /**
     * @access public
     * @var SalesRoleSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "SalesRoleSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
