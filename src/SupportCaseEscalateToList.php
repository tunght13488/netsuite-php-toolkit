<?php

namespace NetSuite\WebServices;

class SupportCaseEscalateToList
{
    /**
     * @access public
     * @var SupportCaseEscalateTo[]
     */
    public $escalateTo;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "escalateTo" => "SupportCaseEscalateTo[]",
        "replaceAll" => "boolean",
    );
}
