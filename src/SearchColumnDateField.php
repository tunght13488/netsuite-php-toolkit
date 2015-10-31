<?php

namespace NetSuite\WebServices;

class SearchColumnDateField extends SearchColumnField
{
    /**
     * @access public
     * @var dateTime
     */
    public $searchValue;

    static $paramtypesmap = array(
        "searchValue" => "dateTime",
    );
}
