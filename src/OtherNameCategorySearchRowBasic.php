<?php

namespace NetSuite\WebServices;

class OtherNameCategorySearchRowBasic extends SearchRowBasic
{
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
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    static $paramtypesmap = array(
        "externalId" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
    );
}
