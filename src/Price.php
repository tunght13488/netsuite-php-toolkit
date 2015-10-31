<?php

namespace NetSuite\WebServices;

class Price
{
    /**
     * @access public
     * @var float
     */
    public $value;

    /**
     * @access public
     * @var float
     */
    public $quantity;

    static $paramtypesmap = array(
        "value" => "float",
        "quantity" => "float",
    );
}
