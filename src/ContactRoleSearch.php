<?php

namespace NetSuite\WebServices;

class ContactRoleSearch extends SearchRecord
{
    /**
     * @access public
     * @var ContactRoleSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "ContactRoleSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
