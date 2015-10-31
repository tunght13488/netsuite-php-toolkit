<?php

namespace NetSuite\WebServices;

class JobResourcesList
{
    /**
     * @access public
     * @var JobResources[]
     */
    public $jobResources;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "jobResources" => "JobResources[]",
        "replaceAll" => "boolean",
    );
}
