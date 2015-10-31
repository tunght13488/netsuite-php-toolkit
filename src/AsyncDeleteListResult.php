<?php

namespace NetSuite\WebServices;

class AsyncDeleteListResult extends AsyncResult
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
