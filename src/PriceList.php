<?php

namespace NetSuite\WebServices;

class PriceList
{
    /**
     * @access public
     * @var Price[]
     */
    public $price;

    static $paramtypesmap = array(
        "price" => "Price[]",
    );
}
