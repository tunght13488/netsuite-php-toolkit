<?php

namespace NetSuite\WebServices;

class CustomerCategorySearchRow extends SearchRow
{
    /**
     * @access public
     * @var CustomerCategorySearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
