<?php

namespace NetSuite\WebServices;

class CustomRecordTypeTabs
{
    /**
     * @access public
     * @var string
     */
    public $tabTitle;

    /**
     * @access public
     * @var RecordRef
     */
    public $tabParent;

    /**
     * @access public
     * @var LanguageValueList
     */
    public $tabTitleLanguageValueList;

    static $paramtypesmap = array(
        "tabTitle" => "string",
        "tabParent" => "RecordRef",
        "tabTitleLanguageValueList" => "LanguageValueList",
    );
}
