<?php

namespace NetSuite\WebServices;

class OtherNameCategorySearchRow extends SearchRow
{
    /**
     * @access public
     * @var OtherNameCategorySearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "OtherNameCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
