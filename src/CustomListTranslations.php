<?php

namespace NetSuite\WebServices;

class CustomListTranslations
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
    public $name;

    static $paramtypesmap = array(
        "locale" => "Language",
        "localeDescription" => "string",
        "name" => "string",
    );
}
