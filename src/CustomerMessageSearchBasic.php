<?php

namespace NetSuite\WebServices;

class CustomerMessageSearchBasic extends SearchRecordBasic
{
    /**
     * @access public
     * @var SearchStringField
     */
    public $description;

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
     * @var SearchBooleanField
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchStringField
     */
    public $name;

    /**
     * @access public
     * @var SearchBooleanField
     */
    public $preferred;

    static $paramtypesmap = array(
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "preferred" => "SearchBooleanField",
    );
}
