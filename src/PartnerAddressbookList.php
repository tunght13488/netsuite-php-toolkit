<?php

namespace NetSuite\WebServices;

class PartnerAddressbookList
{
    /**
     * @access public
     * @var PartnerAddressbook[]
     */
    public $addressbook;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "addressbook" => "PartnerAddressbook[]",
        "replaceAll" => "boolean",
    );
}
