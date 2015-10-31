<?php

namespace NetSuite\WebServices;

class GetDeletedRequest
{
    /**
     * @access public
     * @var GetDeletedFilter
     */
    public $getDeletedFilter;

    /**
     * @access public
     * @var integer
     */
    public $pageIndex;

    static $paramtypesmap = array(
        "getDeletedFilter" => "GetDeletedFilter",
        "pageIndex" => "integer",
    );
}
