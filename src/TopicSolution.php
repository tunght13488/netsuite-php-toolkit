<?php

namespace NetSuite\WebServices;

class TopicSolution
{
    /**
     * @access public
     * @var RecordRef
     */
    public $solution;

    /**
     * @access public
     * @var string
     */
    public $message;

    static $paramtypesmap = array(
        "solution" => "RecordRef",
        "message" => "string",
    );
}
