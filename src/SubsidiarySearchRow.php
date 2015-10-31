<?php

namespace NetSuite\WebServices;

class SubsidiarySearchRow extends SearchRow
{
    /**
     * @access public
     * @var SubsidiarySearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    public $addressJoin;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    public $defaultAdvanceToApplyAccountJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    public $returnAddressJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    public $shippingAddressJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "SubsidiarySearchRowBasic",
        "addressJoin" => "AddressSearchRowBasic",
        "defaultAdvanceToApplyAccountJoin" => "AccountSearchRowBasic",
        "returnAddressJoin" => "AddressSearchRowBasic",
        "shippingAddressJoin" => "AddressSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
