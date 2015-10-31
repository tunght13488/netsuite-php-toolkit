<?php

namespace NetSuite\WebServices;

class DepositApplicationApplyList
{
    /**
     * @access public
     * @var DepositApplicationApply[]
     */
    public $apply;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "apply" => "DepositApplicationApply[]",
        "replaceAll" => "boolean",
    );
}
