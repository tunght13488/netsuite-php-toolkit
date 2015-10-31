<?php

namespace NetSuite\WebServices;

class CreditMemoItemList
{
    /**
     * @access public
     * @var CreditMemoItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "CreditMemoItem[]",
        "replaceAll" => "boolean",
    );
}
