<?php

namespace NetSuite\WebServices;

class ItemFulfillmentPackageUspsList
{
    /**
     * @access public
     * @var ItemFulfillmentPackageUsps[]
     */
    public $packageUsps;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "packageUsps" => "ItemFulfillmentPackageUsps[]",
        "replaceAll" => "boolean",
    );
}
