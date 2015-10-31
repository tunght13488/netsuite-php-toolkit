<?php

namespace NetSuite\WebServices;

class CustomerRefundApplyList
{
    /**
     * @access public
     * @var CustomerRefundApply[]
     */
    public $apply;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "apply" => "CustomerRefundApply[]",
        "replaceAll" => "boolean",
    );
}
