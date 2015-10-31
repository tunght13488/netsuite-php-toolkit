<?php

namespace NetSuite\WebServices;

class UpdateListRequest
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
