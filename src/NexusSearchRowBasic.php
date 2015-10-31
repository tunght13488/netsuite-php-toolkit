<?php

namespace NetSuite\WebServices;

class NexusSearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $country;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $state;

    static $paramtypesmap = array(
        "country" => "SearchColumnEnumSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "state" => "SearchColumnSelectField[]",
    );
}
