<?php

namespace NetSuite\WebServices;

class AsyncAddListResult extends AsyncResult
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
