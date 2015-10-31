<?php

namespace NetSuite\WebServices;

class JobTypeSearch extends SearchRecord
{
    /**
     * @access public
     * @var JobTypeSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "JobTypeSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
