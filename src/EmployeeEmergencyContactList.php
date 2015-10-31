<?php

namespace NetSuite\WebServices;

class EmployeeEmergencyContactList
{
    /**
     * @access public
     * @var EmployeeEmergencyContact[]
     */
    public $employeeEmergencyContact;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "employeeEmergencyContact" => "EmployeeEmergencyContact[]",
        "replaceAll" => "boolean",
    );
}
