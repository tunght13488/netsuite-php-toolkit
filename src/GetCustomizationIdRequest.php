<?php

namespace NetSuite\WebServices;

class GetCustomizationIdRequest
{
    /**
     * @access public
     * @var CustomizationType
     */
    public $customizationType;

    /**
     * @access public
     * @var boolean
     */
    public $includeInactives;

    static $paramtypesmap = array(
        "customizationType" => "CustomizationType",
        "includeInactives" => "boolean",
    );
}
