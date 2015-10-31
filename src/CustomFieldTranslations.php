<?php

namespace NetSuite\WebServices;

class CustomFieldTranslations
{
    /**
     * @access public
     * @var Language
     */
    public $locale;

    /**
     * @access public
     * @var string
     */
    public $localeDescription;

    /**
     * @access public
     * @var string
     */
    public $label;

    /**
     * @access public
     * @var string
     */
    public $help;

    static $paramtypesmap = array(
        "locale" => "Language",
        "localeDescription" => "string",
        "label" => "string",
        "help" => "string",
    );
}
