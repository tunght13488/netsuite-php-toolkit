<?php

namespace NetSuite\WebServices;

class CustomListSearch extends SearchRecord
{
    /**
     * @access public
     * @var CustomListSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomListSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
