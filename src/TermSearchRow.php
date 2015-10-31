<?php

namespace NetSuite\WebServices;

class TermSearchRow extends SearchRow
{
    /**
     * @access public
     * @var TermSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "TermSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
