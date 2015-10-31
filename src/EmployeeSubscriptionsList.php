<?php

namespace NetSuite\WebServices;

class EmployeeSubscriptionsList
{
    /**
     * @access public
     * @var EmployeeSubscriptions[]
     */
    public $subscriptions;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "subscriptions" => "EmployeeSubscriptions[]",
        "replaceAll" => "boolean",
    );
}
