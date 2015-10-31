<?php

namespace NetSuite\WebServices;

class CashRefundSalesTeamList
{
    /**
     * @access public
     * @var CashRefundSalesTeam[]
     */
    public $salesTeam;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "salesTeam" => "CashRefundSalesTeam[]",
        "replaceAll" => "boolean",
    );
}
