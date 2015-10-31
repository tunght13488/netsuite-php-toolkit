<?php

namespace NetSuite\WebServices;

class CustomerRefundDepositList
{
    /**
     * @access public
     * @var CustomerRefundDeposit[]
     */
    public $customerRefundDeposit;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "customerRefundDeposit" => "CustomerRefundDeposit[]",
        "replaceAll" => "boolean",
    );
}
