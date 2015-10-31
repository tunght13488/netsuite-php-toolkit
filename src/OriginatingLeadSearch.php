<?php

namespace NetSuite\WebServices;

class OriginatingLeadSearch extends SearchRecord
{
    /**
     * @access public
     * @var OriginatingLeadSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "OriginatingLeadSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
