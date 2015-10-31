<?php

namespace NetSuite\WebServices;

class JobStatusSearch extends SearchRecord
{
    /**
     * @access public
     * @var JobStatusSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "JobStatusSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
