<?php

namespace NetSuite\WebServices;

class SearchEnumMultiSelectCustomField extends SearchCustomField
{
    /**
     * @access public
     * @var string[]
     */
    public $searchValue;

    /**
     * @access public
     * @var SearchEnumMultiSelectFieldOperator
     */
    public $operator;

    static $paramtypesmap = array(
        "searchValue" => "string[]",
        "operator" => "SearchEnumMultiSelectFieldOperator",
    );
}
