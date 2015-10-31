<?php

namespace NetSuite\WebServices;

class SessionResponse
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $userId;

    /**
     * @access public
     * @var WsRoleList
     */
    public $wsRoleList;

    static $paramtypesmap = array(
        "status" => "Status",
        "userId" => "RecordRef",
        "wsRoleList" => "WsRoleList",
    );
}
