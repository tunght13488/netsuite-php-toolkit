<?php

namespace NetSuite\WebServices;

class SearchLongCustomField extends SearchCustomField
{
    /**
     * @access public
     * @var integer
     */
    public $searchValue;

    /**
     * @access public
     * @var integer
     */
    public $searchValue2;

    /**
     * @access public
     * @var SearchLongFieldOperator
     */
    public $operator;

    static $paramtypesmap = array(
        "searchValue" => "integer",
        "searchValue2" => "integer",
        "operator" => "SearchLongFieldOperator",
    );
}
