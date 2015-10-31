<?php

namespace NetSuite\WebServices;

class PurchaseRequisitionAccountingBookDetailList
{
    /**
     * @access public
     * @var PurchaseRequisitionAccountingBookDetail[]
     */
    public $purchaseRequisitionAccountingBookDetail;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "purchaseRequisitionAccountingBookDetail" => "PurchaseRequisitionAccountingBookDetail[]",
        "replaceAll" => "boolean",
    );
}
