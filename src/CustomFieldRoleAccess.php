<?php

namespace NetSuite\WebServices;

class CustomFieldRoleAccess
{
    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    /**
     * @access public
     * @var CustomizationAccessLevel
     */
    public $accessLevel;

    /**
     * @access public
     * @var CustomizationSearchLevel
     */
    public $searchLevel;

    static $paramtypesmap = array(
        "role" => "RecordRef",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
    );
}
