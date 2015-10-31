<?php

namespace NetSuite\WebServices;

class CustomListSearchRow extends SearchRow
{
    /**
     * @access public
     * @var CustomListSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomListSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
