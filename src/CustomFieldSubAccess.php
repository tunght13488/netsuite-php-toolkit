<?php

namespace NetSuite\WebServices;

class CustomFieldSubAccess
{
    /**
     * @access public
     * @var RecordRef
     */
    public $sub;

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
        "sub" => "RecordRef",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
    );
}
