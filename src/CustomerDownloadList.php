<?php

namespace NetSuite\WebServices;

class CustomerDownloadList
{
    /**
     * @access public
     * @var CustomerDownload[]
     */
    public $download;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "download" => "CustomerDownload[]",
        "replaceAll" => "boolean",
    );
}
