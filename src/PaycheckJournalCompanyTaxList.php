<?php

namespace NetSuite\WebServices;

class PaycheckJournalCompanyTaxList
{
    /**
     * @access public
     * @var PaycheckJournalCompanyTax[]
     */
    public $paycheckJournalCompanyTax;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "paycheckJournalCompanyTax" => "PaycheckJournalCompanyTax[]",
        "replaceAll" => "boolean",
    );
}
