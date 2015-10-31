<?php

namespace NetSuite\WebServices;

class CampaignDirectMailList
{
    /**
     * @access public
     * @var CampaignDirectMail[]
     */
    public $campaignDirectMail;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "campaignDirectMail" => "CampaignDirectMail[]",
        "replaceAll" => "boolean",
    );
}
