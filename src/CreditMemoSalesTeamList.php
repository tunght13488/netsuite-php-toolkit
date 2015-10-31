<?php

namespace NetSuite\WebServices;

class CreditMemoSalesTeamList
{
    /**
     * @access public
     * @var CreditMemoSalesTeam[]
     */
    public $salesTeam;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "salesTeam" => "CreditMemoSalesTeam[]",
        "replaceAll" => "boolean",
    );
}
