<?php

namespace NetSuite\WebServices;

class GroupMemberSearchBasic extends SearchRecordBasic
{
    /**
     * @access public
     * @var SearchMultiSelectField
     */
    public $groupId;

    static $paramtypesmap = array(
        "groupId" => "SearchMultiSelectField",
    );
}
