<?php

namespace NetSuite\WebServices;

class EmployeeCompanyContribution
{
    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var string
     */
    public $rate;

    /**
     * @access public
     * @var float
     */
    public $limit;

    /**
     * @access public
     * @var boolean
     */
    public $inactive;

    /**
     * @access public
     * @var dateTime
     */
    public $effectiveDate;

    /**
     * @access public
     * @var dateTime
     */
    public $expirationDate;

    static $paramtypesmap = array(
        "payrollItem" => "RecordRef",
        "rate" => "string",
        "limit" => "float",
        "inactive" => "boolean",
        "effectiveDate" => "dateTime",
        "expirationDate" => "dateTime",
    );
}
