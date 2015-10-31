<?php

namespace NetSuite\WebServices;

class MapSsoRequest
{
    /**
     * @access public
     * @var SsoCredentials
     */
    public $ssoCredentials;

    static $paramtypesmap = array(
        "ssoCredentials" => "SsoCredentials",
    );
}
