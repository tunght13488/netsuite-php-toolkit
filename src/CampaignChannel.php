<?php

namespace NetSuite\WebServices;

class CampaignChannel extends Record
{
    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var CampaignChannelEventType
     */
    public $eventType;

    /**
     * @access public
     * @var string
     */
    public $description;

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
        "eventType" => "CampaignChannelEventType",
        "description" => "string",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
