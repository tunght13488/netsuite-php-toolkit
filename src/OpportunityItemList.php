<?php

namespace NetSuite\WebServices;

class OpportunityItemList
{
    /**
     * @access public
     * @var OpportunityItem[]
     */
    public $item;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "item" => "OpportunityItem[]",
        "replaceAll" => "boolean",
    );
}
