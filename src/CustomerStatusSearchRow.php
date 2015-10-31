<?php

namespace NetSuite\WebServices;

class CustomerStatusSearchRow extends SearchRow
{
    /**
     * @access public
     * @var CustomerStatusSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerStatusSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
