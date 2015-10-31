<?php

namespace NetSuite\WebServices;

class SearchColumnEnumMultiSelectCustomField extends SearchColumnCustomField
{
    /**
     * @access public
     * @var string[]
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "string[]",
    );
}
