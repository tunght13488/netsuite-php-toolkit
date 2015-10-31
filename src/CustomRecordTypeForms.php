<?php

namespace NetSuite\WebServices;

class CustomRecordTypeForms
{
    /**
     * @access public
     * @var string
     */
    public $formEdit;

    /**
     * @access public
     * @var string
     */
    public $formName;

    /**
     * @access public
     * @var boolean
     */
    public $formPref;

    static $paramtypesmap = array(
        "formEdit" => "string",
        "formName" => "string",
        "formPref" => "boolean",
    );
}
