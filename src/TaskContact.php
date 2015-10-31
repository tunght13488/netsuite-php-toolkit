<?php

namespace NetSuite\WebServices;

class TaskContact
{
    /**
     * @access public
     * @var RecordRef
     */
    public $company;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    static $paramtypesmap = array(
        "company" => "RecordRef",
        "contact" => "RecordRef",
    );
}
