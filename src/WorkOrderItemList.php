<?php

namespace NetSuite\WebServices;

class WorkOrderItemList
{
    /**
     * @access public
     * @var WorkOrderItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "WorkOrderItem[]",
        "replaceAll" => "boolean",
    );
}
