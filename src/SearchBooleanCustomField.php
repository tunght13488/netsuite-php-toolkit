<?php

namespace NetSuite\WebServices;

class SearchBooleanCustomField extends SearchCustomField
{
    /**
     * @access public
     * @var boolean
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "boolean",
    );
}
