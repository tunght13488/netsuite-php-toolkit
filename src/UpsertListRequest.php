<?php

namespace NetSuite\WebServices;

class UpsertListRequest
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
