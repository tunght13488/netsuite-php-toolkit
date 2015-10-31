<?php

namespace NetSuite\WebServices;

class CustomerStatusSearch extends SearchRecord
{
    /**
     * @access public
     * @var CustomerStatusSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerStatusSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
