<?php

namespace NetSuite\WebServices;

class CashSaleItemList
{
    /**
     * @access public
     * @var CashSaleItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "CashSaleItem[]",
        "replaceAll" => "boolean",
    );
}
