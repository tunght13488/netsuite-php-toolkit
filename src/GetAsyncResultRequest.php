<?php

namespace NetSuite\WebServices;

class GetAsyncResultRequest
{
    /**
     * @access public
     * @var string
     */
    public $jobId;

    /**
     * @access public
     * @var integer
     */
    public $pageIndex;

    static $paramtypesmap = array(
        "jobId" => "string",
        "pageIndex" => "integer",
    );
}
