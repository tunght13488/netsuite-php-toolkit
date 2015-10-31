<?php

namespace NetSuite\WebServices;

class SsoLoginResponse
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
