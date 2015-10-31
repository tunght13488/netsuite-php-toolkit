<?php

namespace NetSuite\WebServices;

class AsyncUpsertListRequest
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
