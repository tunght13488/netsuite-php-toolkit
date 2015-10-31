<?php

namespace NetSuite\WebServices;

class PaymentMethodSearchRow extends SearchRow
{
    /**
     * @access public
     * @var PaymentMethodSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PaymentMethodSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
