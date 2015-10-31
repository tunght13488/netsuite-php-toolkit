<?php

namespace NetSuite\WebServices;

class AccountingPeriodFiscalCalendarsList
{
    /**
     * @access public
     * @var AccountingPeriodFiscalCalendars[]
     */
    public $accountingPeriodFiscalCalendars;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "accountingPeriodFiscalCalendars" => "AccountingPeriodFiscalCalendars[]",
        "replaceAll" => "boolean",
    );
}
