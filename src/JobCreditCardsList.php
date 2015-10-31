<?php

namespace NetSuite\WebServices;

class JobCreditCardsList
{
    /**
     * @access public
     * @var JobCreditCards[]
     */
    public $creditCards;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "creditCards" => "JobCreditCards[]",
        "replaceAll" => "boolean",
    );
}
