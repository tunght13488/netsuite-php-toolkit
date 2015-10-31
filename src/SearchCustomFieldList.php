<?php

namespace NetSuite\WebServices;

class SearchCustomFieldList
{
    /**
     * @access public
     * @var SearchCustomField[]
     */
    public $customField;

    static $paramtypesmap = array(
        "customField" => "SearchCustomField[]",
    );
}
