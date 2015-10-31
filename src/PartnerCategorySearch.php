<?php

namespace NetSuite\WebServices;

class PartnerCategorySearch extends SearchRecord
{
    /**
     * @access public
     * @var PartnerCategorySearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PartnerCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
