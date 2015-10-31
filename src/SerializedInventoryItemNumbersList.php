<?php

namespace NetSuite\WebServices;

class SerializedInventoryItemNumbersList
{
    /**
     * @access public
     * @var SerializedInventoryItemNumbers[]
     */
    public $numbers;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "numbers" => "SerializedInventoryItemNumbers[]",
        "replaceAll" => "boolean",
    );
}
