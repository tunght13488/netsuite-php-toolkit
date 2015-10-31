<?php

namespace NetSuite\WebServices;

class CouponCodeSearch extends SearchRecord
{
    /**
     * @access public
     * @var CouponCodeSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "CouponCodeSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
