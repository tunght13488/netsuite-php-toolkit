<?php

namespace NetSuite\WebServices;

class SalesOrderItemList
{
    /**
     * @access public
     * @var SalesOrderItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "SalesOrderItem[]",
        "replaceAll" => "boolean",
    );
}
