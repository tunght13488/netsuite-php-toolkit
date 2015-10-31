<?php

namespace NetSuite\WebServices;

class ReadResponseList
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var ReadResponse[]
     */
    public $readResponse;

    static $paramtypesmap = array(
        "status" => "Status",
        "readResponse" => "ReadResponse[]",
    );
}
