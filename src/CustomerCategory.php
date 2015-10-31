<?php

namespace NetSuite\WebServices;

class CustomerCategory extends Record
{
    /**
     * @access public
     * @var string
     */
    public $name;

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
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
