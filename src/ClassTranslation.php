<?php

namespace NetSuite\WebServices;

class ClassTranslation
{
    /**
     * @access public
     * @var string
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
    public $name;

    static $paramtypesmap = array(
        "locale" => "string",
        "language" => "string",
        "name" => "string",
    );
}
