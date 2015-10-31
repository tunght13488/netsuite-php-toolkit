<?php

namespace NetSuite\WebServices;

class CustomTransactionAccountingBookDetailList
{
    /**
     * @access public
     * @var CustomTransactionAccountingBookDetail[]
     */
    public $customTransactionAccountingBookDetail;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "customTransactionAccountingBookDetail" => "CustomTransactionAccountingBookDetail[]",
        "replaceAll" => "boolean",
    );
}
