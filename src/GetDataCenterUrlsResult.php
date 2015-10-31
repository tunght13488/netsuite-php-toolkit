<?php

namespace NetSuite\WebServices;

class GetDataCenterUrlsResult
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var DataCenterUrls
     */
    public $dataCenterUrls;

    static $paramtypesmap = array(
        "status" => "Status",
        "dataCenterUrls" => "DataCenterUrls",
    );
}
