<?php

namespace NetSuite\WebServices;

class ReturnAuthorizationSalesTeamList
{
    /**
     * @access public
     * @var ReturnAuthorizationSalesTeam[]
     */
    public $salesTeam;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "salesTeam" => "ReturnAuthorizationSalesTeam[]",
        "replaceAll" => "boolean",
    );
}
