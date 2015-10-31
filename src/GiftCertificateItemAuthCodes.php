<?php

namespace NetSuite\WebServices;

class GiftCertificateItemAuthCodes
{
    /**
     * @access public
     * @var string
     */
    public $authCode;

    /**
     * @access public
     * @var boolean
     */
    public $used;

    static $paramtypesmap = array(
        "authCode" => "string",
        "used" => "boolean",
    );
}
