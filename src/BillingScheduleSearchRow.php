<?php

namespace NetSuite\WebServices;

class BillingScheduleSearchRow extends SearchRow
{
    /**
     * @access public
     * @var BillingScheduleSearchRowBasic
     */
    public $basic;

    static $paramtypesmap = array(
        "basic" => "BillingScheduleSearchRowBasic",
    );
}
