<?php

namespace NetSuite\WebServices;

class DepositCashBackList
{
    /**
     * @access public
     * @var DepositCashBack[]
     */
    public $depositCashBack;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "depositCashBack" => "DepositCashBack[]",
        "replaceAll" => "boolean",
    );
}
