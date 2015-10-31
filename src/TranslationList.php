<?php

namespace NetSuite\WebServices;

class TranslationList
{
    /**
     * @access public
     * @var Translation[]
     */
    public $translation;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "translation" => "Translation[]",
        "replaceAll" => "boolean",
    );
}
