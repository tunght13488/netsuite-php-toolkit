<?php

namespace NetSuite\WebServices;

class PayrollItemSearchRow extends SearchRow
{
    /**
     * @access public
     * @var PayrollItemSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "PayrollItemSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
