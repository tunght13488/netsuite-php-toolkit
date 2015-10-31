<?php

namespace NetSuite\WebServices;

class InterCompanyTransferOrderItemList
{
    /**
     * @access public
     * @var InterCompanyTransferOrderItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "InterCompanyTransferOrderItem[]",
        "replaceAll" => "boolean",
    );
}
