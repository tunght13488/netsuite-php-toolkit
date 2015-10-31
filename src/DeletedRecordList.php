<?php

namespace NetSuite\WebServices;

class DeletedRecordList
{
    /**
     * @access public
     * @var DeletedRecord[]
     */
    public $deletedRecord;

    static $paramtypesmap = array(
        "deletedRecord" => "DeletedRecord[]",
    );
}
