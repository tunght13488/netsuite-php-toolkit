<?php

namespace NetSuite\WebServices;

class SearchColumnCustomFieldList
{
    /**
     * @access public
     * @var SearchColumnCustomField[]
     */
    public $customField;

    static $paramtypesmap = array(
        "customField" => "SearchColumnCustomField[]",
    );
}
