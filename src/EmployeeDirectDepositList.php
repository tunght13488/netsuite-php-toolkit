<?php

namespace NetSuite\WebServices;

class EmployeeDirectDepositList
{
    /**
     * @access public
     * @var EmployeeDirectDeposit[]
     */
    public $employeeDirectDeposit;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "employeeDirectDeposit" => "EmployeeDirectDeposit[]",
        "replaceAll" => "boolean",
    );
}
