<?php

namespace NetSuite\WebServices;

class ProjectTaskPredecessorList
{
    /**
     * @access public
     * @var ProjectTaskPredecessor[]
     */
    public $projectTaskPredecessor;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "projectTaskPredecessor" => "ProjectTaskPredecessor[]",
        "replaceAll" => "boolean",
    );
}
