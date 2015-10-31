<?php

namespace NetSuite\WebServices;

class AsyncSearchRequest
{
    /**
     * @access public
     * @var SearchRecord
     */
    public $searchRecord;

    static $paramtypesmap = array(
        "searchRecord" => "SearchRecord",
    );
}
