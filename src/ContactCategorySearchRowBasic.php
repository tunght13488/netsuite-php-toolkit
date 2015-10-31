<?php

namespace NetSuite\WebServices;

class ContactCategorySearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnSelectField[]
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

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $private;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $sync;

    static $paramtypesmap = array(
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "private" => "SearchColumnBooleanField[]",
        "sync" => "SearchColumnBooleanField[]",
    );
}
