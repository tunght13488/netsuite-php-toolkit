<?php

namespace NetSuite\WebServices;

class GetItemAvailabilityRequest
{
    /**
     * @access public
     * @var ItemAvailabilityFilter
     */
    public $itemAvailabilityFilter;

    static $paramtypesmap = array(
        "itemAvailabilityFilter" => "ItemAvailabilityFilter",
    );
}
