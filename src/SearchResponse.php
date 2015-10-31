<?php

namespace NetSuite\WebServices;

class SearchResponse
{
    /**
     * @access public
     * @var SearchResult
     */
    public $searchResult;

    static $paramtypesmap = array(
        "searchResult" => "SearchResult",
    );
}
