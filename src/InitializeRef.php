<?php

namespace NetSuite\WebServices;

class InitializeRef extends BaseRef
{
    /**
     * @access public
     * @var InitializeRefType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $internalId;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    static $paramtypesmap = array(
        "type" => "InitializeRefType",
        "internalId" => "string",
        "externalId" => "string",
    );
}
