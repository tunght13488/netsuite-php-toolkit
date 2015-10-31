<?php

namespace NetSuite\WebServices;

class GetItemAvailabilityResult
{
    /**
     * @access public
     * @var Status
     */
    public $status;

    /**
     * @access public
     * @var ItemAvailabilityList
     */
    public $itemAvailabilityList;

    static $paramtypesmap = array(
        "status" => "Status",
        "itemAvailabilityList" => "ItemAvailabilityList",
    );
}
