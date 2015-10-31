<?php

namespace NetSuite\WebServices;

class CustomerMessageSearch extends SearchRecord
{
    /**
     * @access public
     * @var CustomerMessageSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerMessageSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
