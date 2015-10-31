<?php

namespace NetSuite\WebServices;

class AsyncUpdateListRequest
{
    /**
     * @access public
     * @var Record[]
     */
    public $record;

    static $paramtypesmap = array(
        "record" => "Record[]",
    );
}
