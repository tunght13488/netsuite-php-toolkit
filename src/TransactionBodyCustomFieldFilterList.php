<?php

namespace NetSuite\WebServices;

class TransactionBodyCustomFieldFilterList
{
    /**
     * @access public
     * @var TransactionBodyCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "TransactionBodyCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
