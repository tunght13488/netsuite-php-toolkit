<?php

namespace NetSuite\WebServices;

class ClassificationSearch extends SearchRecord
{
    /**
     * @access public
     * @var ClassificationSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ClassificationSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
