<?php

namespace NetSuite\WebServices;

class EmployeeDeductionList
{
    /**
     * @access public
     * @var EmployeeDeduction[]
     */
    public $employeeDeduction;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "employeeDeduction" => "EmployeeDeduction[]",
        "replaceAll" => "boolean",
    );
}
