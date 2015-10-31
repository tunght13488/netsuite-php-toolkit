<?php

namespace NetSuite\WebServices;

class ContactCategory extends Record
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
    public $private;

    /**
     * @access public
     * @var boolean
     */
    public $sync;

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
        "private" => "boolean",
        "sync" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
