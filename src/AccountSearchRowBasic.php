<?php

namespace NetSuite\WebServices;

class AccountSearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $balance;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $cashFlowRateType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $category1099Misc;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $generalRateType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $number;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    static $paramtypesmap = array(
        "balance" => "SearchColumnDoubleField[]",
        "cashFlowRateType" => "SearchColumnEnumSelectField[]",
        "category1099Misc" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "generalRateType" => "SearchColumnEnumSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "number" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
