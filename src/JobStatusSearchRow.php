<?php

namespace NetSuite\WebServices;

class JobStatusSearchRow extends SearchRow
{
    /**
     * @access public
     * @var JobStatusSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "JobStatusSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
