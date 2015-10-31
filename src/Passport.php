<?php

namespace NetSuite\WebServices;

class Passport
{
    /**
     * @access public
     * @var string
     */
    public $email;

    /**
     * @access public
     * @var string
     */
    public $password;

    /**
     * @access public
     * @var string
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    static $paramtypesmap = array(
        "email" => "string",
        "password" => "string",
        "account" => "string",
        "role" => "RecordRef",
    );
}
