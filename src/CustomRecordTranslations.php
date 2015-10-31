<?php

namespace NetSuite\WebServices;

class CustomRecordTranslations
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
    public $language;

    /**
     * @access public
     * @var string
     */
    public $label;

    static $paramtypesmap = array(
        "locale" => "Language",
        "language" => "string",
        "label" => "string",
    );
}
