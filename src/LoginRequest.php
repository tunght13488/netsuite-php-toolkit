<?php

namespace NetSuite\WebServices;

class LoginRequest
{
    /**
     * @access public
     * @var Passport
     */
    public $passport;

    static $paramtypesmap = array(
        "passport" => "Passport",
    );
}
