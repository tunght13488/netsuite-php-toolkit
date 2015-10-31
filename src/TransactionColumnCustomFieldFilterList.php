<?php

namespace NetSuite\WebServices;

class TransactionColumnCustomFieldFilterList
{
    /**
     * @access public
     * @var TransactionColumnCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "filter" => "TransactionColumnCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
