<?php

namespace NetSuite\WebServices;

class PriceLevelSearchRow extends SearchRow
{
    /**
     * @access public
     * @var PriceLevelSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "PriceLevelSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );
}
