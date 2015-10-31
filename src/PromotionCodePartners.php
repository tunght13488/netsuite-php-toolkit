<?php

namespace NetSuite\WebServices;

class PromotionCodePartners
{
    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var string
     */
    public $code;

    static $paramtypesmap = array(
        "partner" => "RecordRef",
        "code" => "string",
    );
}
