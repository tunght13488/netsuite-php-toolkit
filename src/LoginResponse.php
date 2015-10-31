<?php

namespace NetSuite\WebServices;

class LoginResponse
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
