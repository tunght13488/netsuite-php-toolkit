<?php

namespace NetSuite\WebServices;

class SolutionTopicsList
{
    /**
     * @access public
     * @var SolutionTopics[]
     */
    public $topics;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "topics" => "SolutionTopics[]",
        "replaceAll" => "boolean",
    );
}
