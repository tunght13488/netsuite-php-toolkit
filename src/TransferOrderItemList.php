<?php

namespace NetSuite\WebServices;

class TransferOrderItemList
{
    /**
     * @access public
     * @var TransferOrderItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "TransferOrderItem[]",
        "replaceAll" => "boolean",
    );
}
