<?php

namespace NetSuite\WebServices;

class SearchColumnStringField extends SearchColumnField
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
