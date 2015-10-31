<?php

namespace NetSuite\WebServices;

class CouponCodeSearchRow extends SearchRow
{
    /**
     * @access public
     * @var CouponCodeSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CouponCodeSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
