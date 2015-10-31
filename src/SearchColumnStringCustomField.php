<?php

namespace NetSuite\WebServices;

class SearchColumnStringCustomField extends SearchColumnCustomField
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
