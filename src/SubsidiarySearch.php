<?php

namespace NetSuite\WebServices;

class SubsidiarySearch extends SearchRecord
{
    /**
     * @access public
     * @var SubsidiarySearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    public $addressJoin;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    public $defaultAdvanceToApplyAccountJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    public $returnAddressJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    public $shippingAddressJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "SubsidiarySearchBasic",
        "addressJoin" => "AddressSearchBasic",
        "defaultAdvanceToApplyAccountJoin" => "AccountSearchBasic",
        "returnAddressJoin" => "AddressSearchBasic",
        "shippingAddressJoin" => "AddressSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
