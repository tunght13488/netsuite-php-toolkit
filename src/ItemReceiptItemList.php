<?php

namespace NetSuite\WebServices;

class ItemReceiptItemList
{
    /**
     * @access public
     * @var ItemReceiptItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "ItemReceiptItem[]",
        "replaceAll" => "boolean",
    );
}
