<?php

namespace NetSuite\WebServices;

class ItemFulfillmentPackageUpsList
{
    /**
     * @access public
     * @var ItemFulfillmentPackageUps[]
     */
    public $packageUps;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "packageUps" => "ItemFulfillmentPackageUps[]",
        "replaceAll" => "boolean",
    );
}
