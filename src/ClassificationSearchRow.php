<?php

namespace NetSuite\WebServices;

class ClassificationSearchRow extends SearchRow
{
    /**
     * @access public
     * @var ClassificationSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ClassificationSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
