<?php

namespace NetSuite\WebServices;

class BillingScheduleSearch extends SearchRecord
{
    /**
     * @access public
     * @var BillingScheduleSearchBasic
     */
    public $basic;

    static $paramtypesmap = array(
        "basic" => "BillingScheduleSearchBasic",
    );
}
