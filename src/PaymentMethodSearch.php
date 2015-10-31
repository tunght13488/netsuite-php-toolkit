<?php

namespace NetSuite\WebServices;

class PaymentMethodSearch extends SearchRecord
{
    /**
     * @access public
     * @var PaymentMethodSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PaymentMethodSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
