<?php

namespace NetSuite\WebServices;

class CustomerGroupPricing
{
    /**
     * @access public
     * @var RecordRef
     */
    public $group;

    /**
     * @access public
     * @var RecordRef
     */
    public $level;

    static $paramtypesmap = array(
        "group" => "RecordRef",
        "level" => "RecordRef",
    );
}
