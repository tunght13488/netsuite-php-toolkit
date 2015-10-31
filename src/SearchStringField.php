<?php

namespace NetSuite\WebServices;

class SearchStringField
{
    /**
     * @access public
     * @var string
     */
    public $searchValue;

    /**
     * @access public
     * @var SearchStringFieldOperator
     */
    public $operator;

    static $paramtypesmap = array(
        "searchValue" => "string",
        "operator" => "SearchStringFieldOperator",
    );
}
