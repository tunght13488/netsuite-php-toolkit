<?php

namespace NetSuite\WebServices;

class CashRefundItemList
{
    /**
     * @access public
     * @var CashRefundItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "CashRefundItem[]",
        "replaceAll" => "boolean",
    );
}
