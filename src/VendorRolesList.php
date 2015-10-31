<?php

namespace NetSuite\WebServices;

class VendorRolesList
{
    /**
     * @access public
     * @var VendorRoles[]
     */
    public $roles;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "roles" => "VendorRoles[]",
        "replaceAll" => "boolean",
    );
}
