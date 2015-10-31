<?php

namespace NetSuite\WebServices;

class SubsidiaryAccountingBookDetail
{
    /**
     * @access public
     * @var RecordRef
     */
    public $accountingBook;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var AccountingBookStatus
     */
    public $bookStatus;

    static $paramtypesmap = array(
        "accountingBook" => "RecordRef",
        "currency" => "RecordRef",
        "bookStatus" => "AccountingBookStatus",
    );
}
