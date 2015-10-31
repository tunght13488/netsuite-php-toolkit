<?php

namespace NetSuite\WebServices;

class VendorCurrency
{
    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    public $balance;

    /**
     * @access public
     * @var float
     */
    public $unbilledOrders;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "balance" => "float",
        "unbilledOrders" => "float",
    );
}
