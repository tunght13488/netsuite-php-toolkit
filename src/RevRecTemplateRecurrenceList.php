<?php

namespace NetSuite\WebServices;

class RevRecTemplateRecurrenceList
{
    /**
     * @access public
     * @var RevRecTemplateRecurrence[]
     */
    public $revRecTemplateRecurrence;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "revRecTemplateRecurrence" => "RevRecTemplateRecurrence[]",
        "replaceAll" => "boolean",
    );
}
