<?php

namespace NetSuite\WebServices;

class PresentationItemList
{
    /**
     * @access public
     * @var PresentationItem[]
     */
    public $presentationItem;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "presentationItem" => "PresentationItem[]",
        "replaceAll" => "boolean",
    );
}
