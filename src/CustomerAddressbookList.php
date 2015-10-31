<?php

namespace NetSuite\WebServices;

class CustomerAddressbookList
{
    /**
     * @access public
     * @var CustomerAddressbook[]
     */
    public $addressbook;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "addressbook" => "CustomerAddressbook[]",
        "replaceAll" => "boolean",
    );
}
