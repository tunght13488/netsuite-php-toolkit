<?php

namespace NetSuite\WebServices;

class CustomerCategorySearch extends SearchRecord
{
    /**
     * @access public
     * @var CustomerCategorySearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
