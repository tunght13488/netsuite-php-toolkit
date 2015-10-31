<?php

namespace NetSuite\WebServices;

class TopicSolutionList
{
    /**
     * @access public
     * @var TopicSolution[]
     */
    public $solution;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "solution" => "TopicSolution[]",
        "replaceAll" => "boolean",
    );
}
