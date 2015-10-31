<?php

namespace NetSuite\WebServices;

class TaskContactList
{
    /**
     * @access public
     * @var TaskContact[]
     */
    public $contact;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "contact" => "TaskContact[]",
        "replaceAll" => "boolean",
    );
}
