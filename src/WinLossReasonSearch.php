<?php

namespace NetSuite\WebServices;

class WinLossReasonSearch extends SearchRecord
{
    /**
     * @access public
     * @var WinLossReasonSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "WinLossReasonSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
