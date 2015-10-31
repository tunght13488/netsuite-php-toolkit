<?php

namespace NetSuite\WebServices;

class EstimateItemList
{
    /**
     * @access public
     * @var EstimateItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "EstimateItem[]",
        "replaceAll" => "boolean",
    );
}
