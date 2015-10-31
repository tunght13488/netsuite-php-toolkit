<?php

namespace NetSuite\WebServices;

class EmployeeAddressbookList
{
    /**
     * @access public
     * @var EmployeeAddressbook[]
     */
    public $addressbook;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "addressbook" => "EmployeeAddressbook[]",
        "replaceAll" => "boolean",
    );
}
