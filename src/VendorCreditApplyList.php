<?php

namespace NetSuite\WebServices;

class VendorCreditApplyList
{
    /**
     * @access public
     * @var VendorCreditApply[]
     */
    public $apply;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "apply" => "VendorCreditApply[]",
        "replaceAll" => "boolean",
    );
}
