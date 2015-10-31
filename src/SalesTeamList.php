<?php

namespace NetSuite\WebServices;

class SalesTeamList
{
    /**
     * @access public
     * @var CustomerSalesTeam[]
     */
    public $salesTeam;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "salesTeam" => "CustomerSalesTeam[]",
        "replaceAll" => "boolean",
    );
}
