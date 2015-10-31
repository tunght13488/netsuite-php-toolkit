<?php

namespace NetSuite\WebServices;

class RevRecTemplateRecurrence
{
    /**
     * @access public
     * @var RecordRef
     */
    public $incomeaccount;

    /**
     * @access public
     * @var integer
     */
    public $periodOffset;

    /**
     * @access public
     * @var string
     */
    public $recamount;

    static $paramtypesmap = array(
        "incomeaccount" => "RecordRef",
        "periodOffset" => "integer",
        "recamount" => "string",
    );
}
