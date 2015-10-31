<?php

namespace NetSuite\WebServices;

class ItemFulfillmentItemList
{
    /**
     * @access public
     * @var ItemFulfillmentItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "ItemFulfillmentItem[]",
        "replaceAll" => "boolean",
    );
}
