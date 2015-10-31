<?php

namespace NetSuite\WebServices;

class SupportCaseSolutionsList
{
    /**
     * @access public
     * @var SupportCaseSolutions[]
     */
    public $solutions;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "solutions" => "SupportCaseSolutions[]",
        "replaceAll" => "boolean",
    );
}
