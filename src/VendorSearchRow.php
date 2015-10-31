<?php

namespace NetSuite\WebServices;

class VendorSearchRow extends SearchRow
{
    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    public $accountJoin;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    public $contactJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    public $contactPrimaryJoin;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    public $expAccountJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    public $fileJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    public $messagesFromJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    public $messagesToJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "VendorSearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "expAccountJoin" => "AccountSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
