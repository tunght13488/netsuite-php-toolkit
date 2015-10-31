<?php

namespace NetSuite\WebServices;

class CalendarEventAttendeeList
{
    /**
     * @access public
     * @var CalendarEventAttendee[]
     */
    public $attendee;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "attendee" => "CalendarEventAttendee[]",
        "replaceAll" => "boolean",
    );
}
