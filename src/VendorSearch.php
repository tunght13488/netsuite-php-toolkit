<?php

namespace NetSuite\WebServices;

class VendorSearch extends SearchRecord
{
    /**
     * @access public
     * @var VendorSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    public $accountJoin;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    public $campaignResponseJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    public $contactJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    public $contactPrimaryJoin;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    public $expAccountJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    public $fileJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    public $messagesJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    public $messagesFromJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    public $messagesToJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    public $transactionJoin;

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

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "VendorSearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "expAccountJoin" => "AccountSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
