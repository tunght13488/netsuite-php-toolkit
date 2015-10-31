<?php

namespace NetSuite\WebServices;

class ProductFeedList
{
    /**
     * @access public
     * @var ItemProductFeed[]
     */
    public $productFeed;

    static $paramtypesmap = array(
        "productFeed" => "ItemProductFeed[]",
    );
}
