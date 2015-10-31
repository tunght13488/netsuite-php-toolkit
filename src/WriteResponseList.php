<?php

namespace NetSuite\WebServices;

class WriteResponseList
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var WriteResponse[]
     */
    public $writeResponse;

    static $paramtypesmap = array(
        "status" => "Status",
        "writeResponse" => "WriteResponse[]",
    );
}
