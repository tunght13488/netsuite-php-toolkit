<?php

namespace NetSuite\WebServices;

class CategoryList
{
    /**
     * @access public
     * @var RecordRef[]
     */
    public $category;

    static $paramtypesmap = array(
        "category" => "RecordRef[]",
    );
}
