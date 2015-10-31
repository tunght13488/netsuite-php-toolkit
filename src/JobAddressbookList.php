<?php

namespace NetSuite\WebServices;

class JobAddressbookList
{
    /**
     * @access public
     * @var JobAddressbook[]
     */
    public $addressbook;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "addressbook" => "JobAddressbook[]",
        "replaceAll" => "boolean",
    );
}
