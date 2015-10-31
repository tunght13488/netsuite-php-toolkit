<?php

namespace NetSuite\WebServices;

class SiteCategory_accounting
{
    /**
     * @access public
     * @var RecordRef
     */
    public $website;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var boolean
     */
    public $isDefault;

    /**
     * @access public
     * @var string
     */
    public $categoryDescription;

    static $paramtypesmap = array(
        "website" => "RecordRef",
        "category" => "RecordRef",
        "isDefault" => "boolean",
        "categoryDescription" => "string",
    );
}
