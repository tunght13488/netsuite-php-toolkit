<?php

namespace NetSuite\WebServices;

class ServiceItemTaskTemplates
{
    /**
     * @access public
     * @var string
     */
    public $taskName;

    /**
     * @access public
     * @var integer
     */
    public $taskStartOffset;

    /**
     * @access public
     * @var Duration
     */
    public $taskDuration;

    static $paramtypesmap = array(
        "taskName" => "string",
        "taskStartOffset" => "integer",
        "taskDuration" => "Duration",
    );
}
