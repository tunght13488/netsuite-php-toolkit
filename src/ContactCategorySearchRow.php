<?php

namespace NetSuite\WebServices;

class ContactCategorySearchRow extends SearchRow
{
    /**
     * @access public
     * @var ContactCategorySearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "ContactCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
