<?php

namespace NetSuite\WebServices;

class CashSaleTimeList
{
    /**
     * @access public
     * @var CashSaleTime[]
     */
    public $time;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "time" => "CashSaleTime[]",
        "replaceAll" => "boolean",
    );
}
