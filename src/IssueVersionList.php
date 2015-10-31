<?php

namespace NetSuite\WebServices;

class IssueVersionList
{
    /**
     * @access public
     * @var IssueVersion[]
     */
    public $issueVersion;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "issueVersion" => "IssueVersion[]",
        "replaceAll" => "boolean",
    );
}
