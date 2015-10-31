<?php

namespace NetSuite\WebServices;

class PaycheckJournalEarning
{
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var float
     */
    public $hours;

    /**
     * @access public
     * @var float
     */
    public $amount;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var CustomFieldList
     */
    public $customFieldList;

    static $paramtypesmap = array(
        "id" => "integer",
        "payrollItem" => "RecordRef",
        "hours" => "float",
        "amount" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
