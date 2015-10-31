<?php

namespace NetSuite\WebServices;

class PromotionCodeItemsList
{
    /**
     * @access public
     * @var PromotionCodeItems[]
     */
    public $items;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "items" => "PromotionCodeItems[]",
        "replaceAll" => "boolean",
    );
}
