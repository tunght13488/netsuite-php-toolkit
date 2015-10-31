<?php

namespace NetSuite\WebServices;

class TermSearch extends SearchRecord
{
    /**
     * @access public
     * @var TermSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "TermSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
