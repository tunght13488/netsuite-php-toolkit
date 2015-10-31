<?php

namespace NetSuite\WebServices;

class DataCenterUrls
{
    /**
     * @access public
     * @var string
     */
    public $restDomain;

    /**
     * @access public
     * @var string
     */
    public $webservicesDomain;

    /**
     * @access public
     * @var string
     */
    public $systemDomain;

    static $paramtypesmap = array(
        "restDomain" => "string",
        "webservicesDomain" => "string",
        "systemDomain" => "string",
    );
}
