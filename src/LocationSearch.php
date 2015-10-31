<?php

namespace NetSuite\WebServices;

class LocationSearch extends SearchRecord
{
    /**
     * @access public
     * @var LocationSearchBasic
     */
    public $basic;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    public $addressJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    public $returnAddressJoin;

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
        "basic" => "LocationSearchBasic",
        "addressJoin" => "AddressSearchBasic",
        "returnAddressJoin" => "AddressSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
