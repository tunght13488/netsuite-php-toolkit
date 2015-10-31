<?php

namespace NetSuite\WebServices;

class ExclusionDateList
{
    /**
     * @access public
     * @var dateTime[]
     */
    public $exclusionDate;

    static $paramtypesmap = array(
        "exclusionDate" => "dateTime[]",
    );
}
