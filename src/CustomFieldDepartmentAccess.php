<?php

namespace NetSuite\WebServices;

class CustomFieldDepartmentAccess
{
    /**
     * @access public
     * @var RecordRef
     */
    public $dept;

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
        "dept" => "RecordRef",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
    );
}
