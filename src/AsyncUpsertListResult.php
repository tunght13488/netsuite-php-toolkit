<?php

namespace NetSuite\WebServices;

class AsyncUpsertListResult extends AsyncResult
{
    /**
     * @access public
     * @var WriteResponseList
     */
    public $writeResponseList;

    static $paramtypesmap = array(
        "writeResponseList" => "WriteResponseList",
    );
}
