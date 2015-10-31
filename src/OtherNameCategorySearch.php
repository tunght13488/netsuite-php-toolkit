<?php

namespace NetSuite\WebServices;

class OtherNameCategorySearch extends SearchRecord
{
    /**
     * @access public
     * @var OtherNameCategorySearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "OtherNameCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
