<?php

namespace NetSuite\WebServices;

class WsRole
{
    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    /**
     * @access public
     * @var boolean
     */
    public $isDefault;

    /**
     * @access public
     * @var boolean
     */
    public $isInactive;

    /**
     * @access public
     * @var boolean
     */
    public $isLoggedInRole;

    static $paramtypesmap = array(
        "role" => "RecordRef",
        "isDefault" => "boolean",
        "isInactive" => "boolean",
        "isLoggedInRole" => "boolean",
    );
}
