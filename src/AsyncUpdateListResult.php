<?php

namespace NetSuite\WebServices;

class AsyncUpdateListResult extends AsyncResult
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
