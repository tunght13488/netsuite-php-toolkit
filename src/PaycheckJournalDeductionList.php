<?php

namespace NetSuite\WebServices;

class PaycheckJournalDeductionList
{
    /**
     * @access public
     * @var PaycheckJournalDeduction[]
     */
    public $paycheckJournalDeduction;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "paycheckJournalDeduction" => "PaycheckJournalDeduction[]",
        "replaceAll" => "boolean",
    );
}
