<?php

namespace NetSuite\WebServices;

class SearchColumnDateCustomField extends SearchColumnCustomField
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
