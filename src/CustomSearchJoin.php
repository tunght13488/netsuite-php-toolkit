<?php

namespace NetSuite\WebServices;

class CustomSearchJoin
{
    /**
     * @access public
     * @var CustomizationRef
     */
    public $customizationRef;

    /**
     * @access public
     * @var SearchRecordBasic
     */
    public $searchRecordBasic;

    static $paramtypesmap = array(
        "customizationRef" => "CustomizationRef",
        "searchRecordBasic" => "SearchRecordBasic",
    );
}
