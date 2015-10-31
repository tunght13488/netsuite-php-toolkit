<?php

namespace NetSuite\WebServices;

class SearchColumnLongCustomField extends SearchColumnCustomField
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
