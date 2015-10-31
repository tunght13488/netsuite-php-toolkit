<?php

namespace NetSuite\WebServices;

class CreditMemoApplyList
{
    /**
     * @access public
     * @var CreditMemoApply[]
     */
    public $apply;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "apply" => "CreditMemoApply[]",
        "replaceAll" => "boolean",
    );
}
