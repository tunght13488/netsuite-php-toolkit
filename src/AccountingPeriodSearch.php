<?php

namespace NetSuite\WebServices;

class AccountingPeriodSearch extends SearchRecord
{
    /**
     * @access public
     * @var AccountingPeriodSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    /**
     * @access public
     * @var NoteSearchBasic
     */
    public $userNotesJoin;

    static $paramtypesmap = array(
        "basic" => "AccountingPeriodSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
    );
}
