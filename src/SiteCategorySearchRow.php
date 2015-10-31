<?php

namespace NetSuite\WebServices;

class SiteCategorySearchRow extends SearchRow
{
    /**
     * @access public
     * @var SiteCategorySearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    public $shopperJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "SiteCategorySearchRowBasic",
        "shopperJoin" => "CustomerSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
