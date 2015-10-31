<?php

namespace NetSuite\WebServices;

class ItemAccountMappingSearchBasic extends SearchRecordBasic
{
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $accountingBook;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $class;

    /**
     * @access public
     * @var SearchMultiSelectCustomField
     */
    public $customDimension;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $department;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $destinationAccount;

    /**
     * @access public
     * @var SearchDateField
     */
    public $effectiveDate;

    /**
     * @access public
     * @var SearchDateField
     */
    public $endDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    public $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    public $internalIdNumber;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    public $itemAccount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $location;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $sourceAccount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "customDimension" => "SearchMultiSelectCustomField",
        "department" => "SearchMultiSelectField",
        "destinationAccount" => "SearchMultiSelectField",
        "effectiveDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "itemAccount" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "sourceAccount" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
