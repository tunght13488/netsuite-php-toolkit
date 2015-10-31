<?php

namespace NetSuite\WebServices;

class PurchaseRequisitionAccountingBookDetail
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
     * @var float
     */
    public $exchangeRate;

    static $paramtypesmap = array(
        "accountingBook" => "RecordRef",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
    );
}
