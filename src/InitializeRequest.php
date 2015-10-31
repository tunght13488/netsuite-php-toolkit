<?php

namespace NetSuite\WebServices;

class InitializeRequest
{
    /**
     * @access public
     * @var InitializeRecord
     */
    public $initializeRecord;

    static $paramtypesmap = array(
        "initializeRecord" => "InitializeRecord",
    );
}
