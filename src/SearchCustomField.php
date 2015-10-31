<?php

namespace NetSuite\WebServices;

class SearchCustomField
{
    /**
     * @access public
     * @var string
     */
    public $internalId;

    /**
     * @access public
     * @var string
     */
    public $scriptId;

    static $paramtypesmap = array(
        "internalId" => "string",
        "scriptId" => "string",
    );
}
