<?php

namespace NetSuite\WebServices;

class GetConsolidatedExchangeRateRequest
{
    /**
     * @access public
     * @var ConsolidatedExchangeRateFilter
     */
    public $consolidatedExchangeRateFilter;

    static $paramtypesmap = array(
        "consolidatedExchangeRateFilter" => "ConsolidatedExchangeRateFilter",
    );
}
