<?php

namespace NetSuite\WebServices;

class SupportCaseEscalateTo
{
    /**
     * @access public
     * @var RecordRef
     */
    public $escalatee;

    /**
     * @access public
     * @var string
     */
    public $email;

    /**
     * @access public
     * @var string
     */
    public $phone;

    static $paramtypesmap = array(
        "escalatee" => "RecordRef",
        "email" => "string",
        "phone" => "string",
    );
}
