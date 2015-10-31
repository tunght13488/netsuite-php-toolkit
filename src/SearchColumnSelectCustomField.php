<?php

namespace NetSuite\WebServices;

class SearchColumnSelectCustomField extends SearchColumnCustomField
{
    /**
     * @access public
     * @var ListOrRecordRef
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "ListOrRecordRef",
    );
}
