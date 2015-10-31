<?php

namespace NetSuite\WebServices;

class ContactRoleSearchRow extends SearchRow
{
    /**
     * @access public
     * @var ContactRoleSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "ContactRoleSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
