<?php

namespace NetSuite\WebServices;

class UpdateInviteeStatusReference
{
    /**
     * @access public
     * @var RecordRef
     */
    public $eventId;

    /**
     * @access public
     * @var CalendarEventAttendeeResponse
     */
    public $responseCode;

    static $paramtypesmap = array(
        "eventId" => "RecordRef",
        "responseCode" => "CalendarEventAttendeeResponse",
    );
}
