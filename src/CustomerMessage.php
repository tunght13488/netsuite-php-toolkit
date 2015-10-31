<?php

namespace NetSuite\WebServices;

class CustomerMessage extends Record
{
    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var boolean
     */
    public $preferred;

    /**
     * @access public
     * @var boolean
     */
    public $isInactive;

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
        "name" => "string",
        "description" => "string",
        "preferred" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
