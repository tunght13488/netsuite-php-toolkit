<?php

namespace NetSuite\WebServices;

class ItemsList
{
    /**
     * @access public
     * @var RecordRef[]
     */
    public $items;

    static $paramtypesmap = array(
        "items" => "RecordRef[]",
    );
}
