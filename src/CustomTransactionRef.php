<?php

namespace NetSuite\WebServices;

class CustomTransactionRef extends BaseRef
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
    public $externalId;

    /**
     * @access public
     * @var string
     */
    public $typeId;

    /**
     * @access public
     * @var string
     */
    public $scriptId;

    static $paramtypesmap = array(
        "internalId" => "string",
        "externalId" => "string",
        "typeId" => "string",
        "scriptId" => "string",
    );
}
