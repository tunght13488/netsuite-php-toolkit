<?php

namespace NetSuite\WebServices;

class PaycheckJournalEarningList
{
    /**
     * @access public
     * @var PaycheckJournalEarning[]
     */
    public $paycheckJournalEarning;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "paycheckJournalEarning" => "PaycheckJournalEarning[]",
        "replaceAll" => "boolean",
    );
}
