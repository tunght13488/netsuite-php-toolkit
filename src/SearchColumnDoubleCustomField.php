<?php

namespace NetSuite\WebServices;

class SearchColumnDoubleCustomField extends SearchColumnCustomField
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
