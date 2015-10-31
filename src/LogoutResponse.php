<?php

namespace NetSuite\WebServices;

class LogoutResponse
{
    /**
     * @access public
     * @var SessionResponse
     */
    public $sessionResponse;

    static $paramtypesmap = array(
        "sessionResponse" => "SessionResponse",
    );
}
