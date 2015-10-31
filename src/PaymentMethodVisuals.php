<?php

namespace NetSuite\WebServices;

class PaymentMethodVisuals
{
    /**
     * @access public
     * @var string
     */
    public $flags;

    /**
     * @access public
     * @var string
     */
    public $location;

    static $paramtypesmap = array(
        "flags" => "string",
        "location" => "string",
    );
}
