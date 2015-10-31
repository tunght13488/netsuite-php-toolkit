<?php

namespace NetSuite\WebServices;

class SearchColumnSelectField extends SearchColumnField
{
    /**
     * @access public
     * @var RecordRef
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "RecordRef",
    );
}
