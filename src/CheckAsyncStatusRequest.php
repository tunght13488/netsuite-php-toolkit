<?php

namespace NetSuite\WebServices;

class CheckAsyncStatusRequest
{
    /**
     * @access public
     * @var string
     */
    public $jobId;

    static $paramtypesmap = array(
        "jobId" => "string",
    );
}
