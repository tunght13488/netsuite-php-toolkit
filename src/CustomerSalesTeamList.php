<?php

namespace NetSuite\WebServices;

class CustomerSalesTeamList
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
