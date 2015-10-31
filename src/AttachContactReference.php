<?php

namespace NetSuite\WebServices;

class AttachContactReference extends AttachReference
{
    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var RecordRef
     */
    public $contactRole;

    static $paramtypesmap = array(
        "contact" => "RecordRef",
        "contactRole" => "RecordRef",
    );
}
