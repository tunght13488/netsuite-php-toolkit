<?php

namespace NetSuite\WebServices;

class SsoLoginRequest
{
    /**
     * @access public
     * @var SsoPassport
     */
    public $ssoPassport;

    static $paramtypesmap = array(
        "ssoPassport" => "SsoPassport",
    );
}
