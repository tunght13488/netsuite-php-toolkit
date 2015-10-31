<?php

namespace NetSuite\WebServices;

class CustomTransactionLineList
{
    /**
     * @access public
     * @var CustomTransactionLine[]
     */
    public $customTransactionLine;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "customTransactionLine" => "CustomTransactionLine[]",
        "replaceAll" => "boolean",
    );
}
