<?php

namespace NetSuite\WebServices;

class CustomSearchRowBasic
{
    /**
     * @access public
     * @var CustomizationRef
     */
    public $customizationRef;

    /**
     * @access public
     * @var SearchRowBasic
     */
    public $searchRowBasic;

    static $paramtypesmap = array(
        "customizationRef" => "CustomizationRef",
        "searchRowBasic" => "SearchRowBasic",
    );
}
