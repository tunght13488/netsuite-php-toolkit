<?php

namespace NetSuite\WebServices;

class InterCompanyJournalEntryLineList
{
    /**
     * @access public
     * @var InterCompanyJournalEntryLine[]
     */
    public $line;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "line" => "InterCompanyJournalEntryLine[]",
        "replaceAll" => "boolean",
    );
}
