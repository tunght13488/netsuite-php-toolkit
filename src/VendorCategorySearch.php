<?php

namespace NetSuite\WebServices;

class VendorCategorySearch extends SearchRecord
{
    /**
     * @access public
     * @var VendorCategorySearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "VendorCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
