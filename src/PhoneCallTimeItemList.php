<?php

namespace NetSuite\WebServices;

class PhoneCallTimeItemList
{
    /**
     * @access public
     * @var TimeItem[]
     */
    public $timeItem;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "timeItem" => "TimeItem[]",
        "replaceAll" => "boolean",
    );
}
