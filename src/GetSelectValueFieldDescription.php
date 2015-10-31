<?php

namespace NetSuite\WebServices;

class GetSelectValueFieldDescription
{
    /**
     * @access public
     * @var RecordType
     */
    public $recordType;

    /**
     * @access public
     * @var RecordRef
     */
    public $customRecordType;

    /**
     * @access public
     * @var RecordRef
     */
    public $customTransactionType;

    /**
     * @access public
     * @var string
     */
    public $sublist;

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var GetSelectValueFilter
     */
    public $filter;

    /**
     * @access public
     * @var GetSelectFilterByFieldValueList
     */
    public $filterByValueList;

    static $paramtypesmap = array(
        "recordType" => "RecordType",
        "customRecordType" => "RecordRef",
        "customTransactionType" => "RecordRef",
        "sublist" => "string",
        "field" => "string",
        "customForm" => "RecordRef",
        "filter" => "GetSelectValueFilter",
        "filterByValueList" => "GetSelectFilterByFieldValueList",
    );
}
