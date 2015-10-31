<?php

namespace NetSuite\WebServices;

class OpportunitySalesTeamList
{
    /**
     * @access public
     * @var OpportunitySalesTeam[]
     */
    public $salesTeam;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "salesTeam" => "OpportunitySalesTeam[]",
        "replaceAll" => "boolean",
    );
}
