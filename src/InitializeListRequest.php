<?php

namespace NetSuite\WebServices;

class InitializeListRequest
{
    /**
     * @access public
     * @var InitializeRecord[]
     */
    public $initializeRecord;

    static $paramtypesmap = array(
        "initializeRecord" => "InitializeRecord[]",
    );
}
