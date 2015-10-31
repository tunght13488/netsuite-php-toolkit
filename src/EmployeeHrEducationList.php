<?php

namespace NetSuite\WebServices;

class EmployeeHrEducationList
{
    /**
     * @access public
     * @var EmployeeHrEducation[]
     */
    public $employeeHrEducation;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "employeeHrEducation" => "EmployeeHrEducation[]",
        "replaceAll" => "boolean",
    );
}
