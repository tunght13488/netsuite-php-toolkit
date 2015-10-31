<?php

namespace NetSuite\WebServices;

class PromotionCodePartnersList
{
    /**
     * @access public
     * @var PromotionCodePartners[]
     */
    public $partners;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "partners" => "PromotionCodePartners[]",
        "replaceAll" => "boolean",
    );
}
