<?php

namespace NetSuite\WebServices;

class GetServerTimeResult
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var dateTime
     */
    public $serverTime;

    static $paramtypesmap = array(
        "status" => "Status",
        "serverTime" => "dateTime",
    );
}
