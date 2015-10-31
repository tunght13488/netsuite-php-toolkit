<?php

namespace NetSuite\WebServices;

class GetDeletedFilter
{
    /**
     * @access public
     * @var SearchDateField
     */
    public $deletedDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    public $type;

    /**
     * @access public
     * @var SearchStringField
     */
    public $scriptId;

    static $paramtypesmap = array(
        "deletedDate" => "SearchDateField",
        "type" => "SearchEnumMultiSelectField",
        "scriptId" => "SearchStringField",
    );
}
