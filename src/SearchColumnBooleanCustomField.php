<?php

namespace NetSuite\WebServices;

class SearchColumnBooleanCustomField extends SearchColumnCustomField
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
