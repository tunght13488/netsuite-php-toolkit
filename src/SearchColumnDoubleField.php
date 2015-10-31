<?php

namespace NetSuite\WebServices;

class SearchColumnDoubleField extends SearchColumnField
{
    /**
     * @access public
     * @var float
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "float",
    );
}
