<?php

namespace NetSuite\WebServices;

class SearchColumnLongField extends SearchColumnField
{
    /**
     * @access public
     * @var integer
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "integer",
    );
}
