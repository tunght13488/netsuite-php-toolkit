<?php

namespace NetSuite\WebServices;

class ContactAddressbookList
{
    /**
     * @access public
     * @var ContactAddressbook[]
     */
    public $addressbook;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "addressbook" => "ContactAddressbook[]",
        "replaceAll" => "boolean",
    );
}
