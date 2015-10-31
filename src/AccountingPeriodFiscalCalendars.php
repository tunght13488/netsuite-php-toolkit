<?php

namespace NetSuite\WebServices;

class AccountingPeriodFiscalCalendars
{
    /**
     * @access public
     * @var RecordRef
     */
    public $fiscalCalendar;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    static $paramtypesmap = array(
        "fiscalCalendar" => "RecordRef",
        "parent" => "RecordRef",
    );
}
