<?php

namespace NetSuite\WebServices;

class PartnerCategorySearchRow extends SearchRow
{
    /**
     * @access public
     * @var PartnerCategorySearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PartnerCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
