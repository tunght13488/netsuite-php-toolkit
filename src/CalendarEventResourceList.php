<?php

namespace NetSuite\WebServices;

class CalendarEventResourceList
{
    /**
     * @access public
     * @var CalendarEventResource[]
     */
    public $resource;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "resource" => "CalendarEventResource[]",
        "replaceAll" => "boolean",
    );
}
