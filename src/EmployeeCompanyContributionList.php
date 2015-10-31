<?php

namespace NetSuite\WebServices;

class EmployeeCompanyContributionList
{
    /**
     * @access public
     * @var EmployeeCompanyContribution[]
     */
    public $employeeCompanyContribution;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "employeeCompanyContribution" => "EmployeeCompanyContribution[]",
        "replaceAll" => "boolean",
    );
}
