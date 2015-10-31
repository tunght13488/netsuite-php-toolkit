<?php

namespace NetSuite\WebServices;

class CalendarEventResource
{
    /**
     * @access public
     * @var RecordRef
     */
    public $resource;

    /**
     * @access public
     * @var string
     */
    public $location;

    static $paramtypesmap = array(
        "resource" => "RecordRef",
        "location" => "string",
    );
}
