<?php

namespace NetSuite\WebServices;

class CustomRecordTranslationsList
{
    /**
     * @access public
     * @var CustomRecordTranslations[]
     */
    public $customRecordTranslations;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "customRecordTranslations" => "CustomRecordTranslations[]",
        "replaceAll" => "boolean",
    );
}
