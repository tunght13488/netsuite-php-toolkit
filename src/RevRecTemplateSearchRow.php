<?php

namespace NetSuite\WebServices;

class RevRecTemplateSearchRow extends SearchRow
{
    /**
     * @access public
     * @var RevRecTemplateSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "RevRecTemplateSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
