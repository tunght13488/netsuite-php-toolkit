<?php

namespace NetSuite\WebServices;

class NSSoapFault
{
    /**
     * @access public
     * @var FaultCodeType
     */
    public $code;

    /**
     * @access public
     * @var string
     */
    public $message;

    static $paramtypesmap = array(
        "code" => "FaultCodeType",
        "message" => "string",
    );
}
