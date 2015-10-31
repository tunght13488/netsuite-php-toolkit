<?php

namespace NetSuite\WebServices;

class LocationSearchRow extends SearchRow
{
    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    public $basic;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    public $addressJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    public $returnAddressJoin;

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
        "basic" => "LocationSearchRowBasic",
        "addressJoin" => "AddressSearchRowBasic",
        "returnAddressJoin" => "AddressSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
