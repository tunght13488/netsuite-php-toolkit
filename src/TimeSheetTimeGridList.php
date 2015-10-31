<?php

namespace NetSuite\WebServices;

class TimeSheetTimeGridList
{
    /**
     * @access public
     * @var TimeSheetTimeGrid[]
     */
    public $timeSheetTimeGrid;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "timeSheetTimeGrid" => "TimeSheetTimeGrid[]",
        "replaceAll" => "boolean",
    );
}
