<?php

namespace NetSuite\WebServices;

class SearchColumnEnumSelectField extends SearchColumnField
{
    /**
     * @access public
     * @var string
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "string",
    );
}
