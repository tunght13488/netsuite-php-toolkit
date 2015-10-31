<?php

namespace NetSuite\WebServices;

class ContactCategorySearch extends SearchRecord
{
    /**
     * @access public
     * @var ContactCategorySearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "ContactCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
