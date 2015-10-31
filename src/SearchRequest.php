<?php

namespace NetSuite\WebServices;

class SearchRequest
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
