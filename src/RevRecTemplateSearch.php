<?php

namespace NetSuite\WebServices;

class RevRecTemplateSearch extends SearchRecord
{
    /**
     * @access public
     * @var RevRecTemplateSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "RevRecTemplateSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
