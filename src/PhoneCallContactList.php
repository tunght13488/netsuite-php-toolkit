<?php

namespace NetSuite\WebServices;

class PhoneCallContactList
{
    /**
     * @access public
     * @var PhoneCallContact[]
     */
    public $contact;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "contact" => "PhoneCallContact[]",
        "replaceAll" => "boolean",
    );
}
