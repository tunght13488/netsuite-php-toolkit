<?php

namespace NetSuite\WebServices;

class CustomFieldDepartmentAccessList
{
    /**
     * @access public
     * @var CustomFieldDepartmentAccess[]
     */
    public $deptAccess;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "deptAccess" => "CustomFieldDepartmentAccess[]",
        "replaceAll" => "boolean",
    );
}
