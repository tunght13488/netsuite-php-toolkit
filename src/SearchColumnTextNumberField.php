<?php

namespace NetSuite\WebServices;

class SearchColumnTextNumberField extends SearchColumnField
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
