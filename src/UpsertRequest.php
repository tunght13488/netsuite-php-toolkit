<?php

namespace NetSuite\WebServices;

class UpsertRequest
{
    /**
     * @access public
     * @var Record
     */
    public $record;

    static $paramtypesmap = array(
        "record" => "Record",
    );
}
