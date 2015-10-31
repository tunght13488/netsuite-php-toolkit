<?php

namespace NetSuite\WebServices;

class IssueRelatedIssues
{
    /**
     * @access public
     * @var IssueRelationship
     */
    public $relationship;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueNumber;

    /**
     * @access public
     * @var string
     */
    public $relationshipComment;

    static $paramtypesmap = array(
        "relationship" => "IssueRelationship",
        "issueNumber" => "RecordRef",
        "relationshipComment" => "string",
    );
}
