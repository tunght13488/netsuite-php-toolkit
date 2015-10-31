<?php

namespace NetSuite\WebServices;

class SearchMultiSelectField
{
    /**
     * @access public
     * @var RecordRef[]
     */
    public $searchValue;

    /**
     * @access public
     * @var SearchMultiSelectFieldOperator
     */
    public $operator;

    static $paramtypesmap = array(
        "searchValue" => "RecordRef[]",
        "operator" => "SearchMultiSelectFieldOperator",
    );
}
