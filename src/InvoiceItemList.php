<?php

namespace NetSuite\WebServices;

class InvoiceItemList
{
    /**
     * @access public
     * @var InvoiceItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "InvoiceItem[]",
        "replaceAll" => "boolean",
    );
}
