<?php

namespace NetSuite\WebServices;

class CreditMemoPartnersList
{
    /**
     * @access public
     * @var Partners[]
     */
    public $partners;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "partners" => "Partners[]",
        "replaceAll" => "boolean",
    );
}
