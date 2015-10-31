<?php

namespace NetSuite\WebServices;

class GiftCertRedemptionList
{
    /**
     * @access public
     * @var GiftCertRedemption[]
     */
    public $giftCertRedemption;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "giftCertRedemption" => "GiftCertRedemption[]",
        "replaceAll" => "boolean",
    );
}
