<?php

namespace NetSuite\WebServices;

class AppDefinitionSearchBasic extends SearchRecordBasic
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
     * @var SearchStringField
     */
    public $name;

    static $paramtypesmap = array(
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "name" => "SearchStringField",
    );
}
