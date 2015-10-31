<?php

namespace NetSuite\WebServices;

class Preferences
{
    /**
     * @access public
     * @var boolean
     */
    public $warningAsError;

    /**
     * @access public
     * @var boolean
     */
    public $disableMandatoryCustomFieldValidation;

    /**
     * @access public
     * @var boolean
     */
    public $disableSystemNotesForCustomFields;

    /**
     * @access public
     * @var boolean
     */
    public $ignoreReadOnlyFields;

    static $paramtypesmap = array(
        "warningAsError" => "boolean",
        "disableMandatoryCustomFieldValidation" => "boolean",
        "disableSystemNotesForCustomFields" => "boolean",
        "ignoreReadOnlyFields" => "boolean",
    );
}
