<?php

namespace NetSuite\WebServices;

class GetAllResult
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var integer
     */
    public $totalRecords;

    /**
     * @access public
     * @var RecordList
     */
    public $recordList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "recordList" => "RecordList",
    );
}
