<?php

namespace NetSuite\WebServices;

class CashSaleSalesTeamList
{
    /**
     * @access public
     * @var CashSaleSalesTeam[]
     */
    public $salesTeam;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "salesTeam" => "CashSaleSalesTeam[]",
        "replaceAll" => "boolean",
    );
}
