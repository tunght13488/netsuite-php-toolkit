<?php

namespace NetSuite\WebServices;

class CustomerMessageSearchRow extends SearchRow
{
    /**
     * @access public
     * @var CustomerMessageSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerMessageSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
