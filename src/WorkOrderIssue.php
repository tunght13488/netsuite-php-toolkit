<?php

namespace NetSuite\WebServices;

class WorkOrderIssue extends Record
{
    /**
     * @access public
     * @var dateTime
     */
    public $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    public $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var dateTime
     */
    public $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var string
     */
    public $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var RecordRef
     */
    public $revision;

    /**
     * @access public
     * @var RecordRef
     */
    public $manufacturingRouting;

    /**
     * @access public
     * @var RecordRef
     */
    public $startOperation;

    /**
     * @access public
     * @var RecordRef
     */
    public $endOperation;

    /**
     * @access public
     * @var WorkOrderIssueComponentList
     */
    public $componentList;

    /**
     * @access public
     * @var CustomFieldList
     */
    public $customFieldList;

    /**
     * @access public
     * @var string
     */
    public $internalId;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "manufacturingRouting" => "RecordRef",
        "startOperation" => "RecordRef",
        "endOperation" => "RecordRef",
        "componentList" => "WorkOrderIssueComponentList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
