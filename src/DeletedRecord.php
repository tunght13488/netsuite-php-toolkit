<?php

namespace NetSuite\WebServices;

class DeletedRecord
{
    /**
     * @access public
     * @var dateTime
     */
    public $deletedDate;

    /**
     * @access public
     * @var BaseRef
     */
    public $record;

    static $paramtypesmap = array(
        "deletedDate" => "dateTime",
        "record" => "BaseRef",
    );
}
