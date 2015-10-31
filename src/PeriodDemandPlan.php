<?php

namespace NetSuite\WebServices;

class PeriodDemandPlan
{
    /**
     * @access public
     * @var float
     */
    public $quantity;

    /**
     * @access public
     * @var DayOfTheWeek
     */
    public $dayOfTheWeek;

    static $paramtypesmap = array(
        "quantity" => "float",
        "dayOfTheWeek" => "DayOfTheWeek",
    );
}
