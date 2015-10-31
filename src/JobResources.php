<?php

namespace NetSuite\WebServices;

class JobResources
{
    /**
     * @access public
     * @var RecordRef
     */
    public $jobResource;

    /**
     * @access public
     * @var string
     */
    public $email;

    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    static $paramtypesmap = array(
        "jobResource" => "RecordRef",
        "email" => "string",
        "role" => "RecordRef",
    );
}
