<?php

namespace NetSuite\WebServices;

class Duration
{
    /**
     * @access public
     * @var float
     */
    public $timeSpan;

    /**
     * @access public
     * @var DurationUnit
     */
    public $unit;

    static $paramtypesmap = array(
        "timeSpan" => "float",
        "unit" => "DurationUnit",
    );
}
