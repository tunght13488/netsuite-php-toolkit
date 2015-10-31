<?php

namespace NetSuite\WebServices;

class NoteTypeSearch extends SearchRecord
{
    /**
     * @access public
     * @var NoteTypeSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    static $paramtypesmap = array(
        "basic" => "NoteTypeSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
