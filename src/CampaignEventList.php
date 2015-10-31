<?php

namespace NetSuite\WebServices;

class CampaignEventList
{
    /**
     * @access public
     * @var CampaignEvent[]
     */
    public $campaignEvent;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "campaignEvent" => "CampaignEvent[]",
        "replaceAll" => "boolean",
    );
}
