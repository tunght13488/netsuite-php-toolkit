<?php

namespace NetSuite\WebServices;

class EmailEmployeesList
{
    /**
     * @access public
     * @var RecordRef[]
     */
    public $emailEmployees;

    static $paramtypesmap = array(
        "emailEmployees" => "RecordRef[]",
    );
}
