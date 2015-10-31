<?php

namespace NetSuite\WebServices;

class OriginatingLeadSearchRow extends SearchRow
{
    /**
     * @access public
     * @var OriginatingLeadSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "OriginatingLeadSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
