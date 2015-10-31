<?php

namespace NetSuite\WebServices;

class CustomizationRef extends RecordRef
{
    /**
     * @access public
     * @var string
     */
    public $scriptId;

    static $paramtypesmap = array(
        "scriptId" => "string",
    );
}
