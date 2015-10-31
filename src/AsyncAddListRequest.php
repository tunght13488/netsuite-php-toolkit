<?php

namespace NetSuite\WebServices;

class AsyncAddListRequest
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
