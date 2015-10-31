<?php

namespace NetSuite\WebServices;

class PaymentMethodVisualsList
{
    /**
     * @access public
     * @var PaymentMethodVisuals[]
     */
    public $paymentMethodVisuals;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "paymentMethodVisuals" => "PaymentMethodVisuals[]",
        "replaceAll" => "boolean",
    );
}
