<?php

namespace NetSuite\WebServices;

class PartnerPromoCodeList
{
    /**
     * @access public
     * @var PartnerPromoCode[]
     */
    public $promoCode;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "promoCode" => "PartnerPromoCode[]",
        "replaceAll" => "boolean",
    );
}
