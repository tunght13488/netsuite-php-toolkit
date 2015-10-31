<?php

namespace NetSuite\WebServices;

class AsyncSearchResult extends AsyncResult
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
