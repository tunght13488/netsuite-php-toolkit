<?php

namespace NetSuite\WebServices;

class BinWorksheetItemList
{
    /**
     * @access public
     * @var BinWorksheetItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "BinWorksheetItem[]",
        "replaceAll" => "boolean",
    );
}
