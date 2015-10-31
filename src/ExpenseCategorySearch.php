<?php

namespace NetSuite\WebServices;

class ExpenseCategorySearch extends SearchRecord
{
    /**
     * @access public
     * @var ExpenseCategorySearchBasic
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
        "basic" => "ExpenseCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
