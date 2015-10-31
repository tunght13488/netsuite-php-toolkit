<?php

namespace NetSuite\WebServices;

class ReadResponse
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var Record
     */
    public $record;

    static $paramtypesmap = array(
        "status" => "Status",
        "record" => "Record",
    );
}
