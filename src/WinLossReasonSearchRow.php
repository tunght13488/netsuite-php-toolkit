<?php

namespace NetSuite\WebServices;

class WinLossReasonSearchRow extends SearchRow
{
    /**
     * @access public
     * @var WinLossReasonSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "WinLossReasonSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
