<?php

namespace NetSuite\WebServices;

class NexusSearchRow extends SearchRow
{
    /**
     * @access public
     * @var NexusSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "NexusSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
