<?php

namespace NetSuite\WebServices;

class SubscriptionsList
{
    /**
     * @access public
     * @var Subscriptions[]
     */
    public $subscriptions;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "subscriptions" => "Subscriptions[]",
        "replaceAll" => "boolean",
    );
}
