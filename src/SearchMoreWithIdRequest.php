<?php

namespace NetSuite\WebServices;

class SearchMoreWithIdRequest
{
    /**
     * @access public
     * @var string
     */
    public $searchId;

    /**
     * @access public
     * @var integer
     */
    public $pageIndex;

    static $paramtypesmap = array(
        "searchId" => "string",
        "pageIndex" => "integer",
    );
}
