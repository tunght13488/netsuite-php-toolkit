<?php

namespace NetSuite\WebServices;

class SearchColumnMultiSelectCustomField extends SearchColumnCustomField
{
    /**
     * @access public
     * @var ListOrRecordRef[]
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "ListOrRecordRef[]",
    );
}
