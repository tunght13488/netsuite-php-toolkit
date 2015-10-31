<?php

namespace NetSuite\WebServices;

class PayrollItemSearch extends SearchRecord
{
    /**
     * @access public
     * @var PayrollItemSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "PayrollItemSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
