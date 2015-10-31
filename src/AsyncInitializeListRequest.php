<?php

namespace NetSuite\WebServices;

class AsyncInitializeListRequest
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
