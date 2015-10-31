<?php

namespace NetSuite\WebServices;

class SearchPreferences
{
    /**
     * @access public
     * @var boolean
     */
    public $bodyFieldsOnly;

    /**
     * @access public
     * @var boolean
     */
    public $returnSearchColumns;

    /**
     * @access public
     * @var integer
     */
    public $pageSize;

    static $paramtypesmap = array(
        "bodyFieldsOnly" => "boolean",
        "returnSearchColumns" => "boolean",
        "pageSize" => "integer",
    );
}
