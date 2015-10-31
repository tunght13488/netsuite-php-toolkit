<?php

namespace NetSuite\WebServices;

class CustomerCreditCardsList
{
    /**
     * @access public
     * @var CustomerCreditCards[]
     */
    public $creditCards;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "creditCards" => "CustomerCreditCards[]",
        "replaceAll" => "boolean",
    );
}
