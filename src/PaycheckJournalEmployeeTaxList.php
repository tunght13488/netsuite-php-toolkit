<?php

namespace NetSuite\WebServices;

class PaycheckJournalEmployeeTaxList
{
    /**
     * @access public
     * @var PaycheckJournalEmployeeTax[]
     */
    public $paycheckJournalEmployeeTax;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "paycheckJournalEmployeeTax" => "PaycheckJournalEmployeeTax[]",
        "replaceAll" => "boolean",
    );
}
