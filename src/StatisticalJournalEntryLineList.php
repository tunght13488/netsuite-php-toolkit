<?php

namespace NetSuite\WebServices;

class StatisticalJournalEntryLineList
{
    /**
     * @access public
     * @var StatisticalJournalEntryLine[]
     */
    public $statisticalJournalEntryLine;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "statisticalJournalEntryLine" => "StatisticalJournalEntryLine[]",
        "replaceAll" => "boolean",
    );
}
