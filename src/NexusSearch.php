<?php

namespace NetSuite\WebServices;

class NexusSearch extends SearchRecord
{
    /**
     * @access public
     * @var NexusSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "NexusSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
