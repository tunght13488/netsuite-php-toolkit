<?php

namespace NetSuite\WebServices;

class ItemFulfillmentPackageFedExList
{
    /**
     * @access public
     * @var ItemFulfillmentPackageFedEx[]
     */
    public $packageFedEx;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "packageFedEx" => "ItemFulfillmentPackageFedEx[]",
        "replaceAll" => "boolean",
    );
}
