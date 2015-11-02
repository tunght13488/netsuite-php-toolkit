<?php

namespace NetSuite\WebServices;

class GetSelectValueRequest
{
    /**
     * @access public
     * @var GetSelectValueFieldDescription
     */
    public $fieldDescription;

    /**
     * @access public
     * @var integer
     */
    public $pageIndex;

    static $paramtypesmap = array(
        "fieldDescription" => "GetSelectValueFieldDescription",
        "pageIndex" => "integer",
    );
}
