<?php

namespace NetSuite\WebServices;

class JobPlStatementList
{
    /**
     * @access public
     * @var JobPlStatement[]
     */
    public $jobPlStatement;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "jobPlStatement" => "JobPlStatement[]",
        "replaceAll" => "boolean",
    );
}
