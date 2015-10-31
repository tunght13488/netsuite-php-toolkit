<?php

namespace NetSuite\WebServices;

class GiftCertificateItemAuthCodesList
{
    /**
     * @access public
     * @var GiftCertificateItemAuthCodes[]
     */
    public $authCodes;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "authCodes" => "GiftCertificateItemAuthCodes[]",
        "replaceAll" => "boolean",
    );
}
