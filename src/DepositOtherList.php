<?php

namespace NetSuite\WebServices;

class DepositOtherList
{
    /**
     * @access public
     * @var DepositOther[]
     */
    public $depositOther;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "depositOther" => "DepositOther[]",
        "replaceAll" => "boolean",
    );
}
