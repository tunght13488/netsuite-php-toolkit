<?php

namespace NetSuite\WebServices;

class OpportunitySalesTeam
{
    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesRole;

    /**
     * @access public
     * @var boolean
     */
    public $isPrimary;

    /**
     * @access public
     * @var float
     */
    public $contribution;

    static $paramtypesmap = array(
        "employee" => "RecordRef",
        "salesRole" => "RecordRef",
        "isPrimary" => "boolean",
        "contribution" => "float",
    );
}
