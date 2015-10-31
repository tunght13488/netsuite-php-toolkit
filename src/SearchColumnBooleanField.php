<?php

namespace NetSuite\WebServices;

class SearchColumnBooleanField extends SearchColumnField
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
