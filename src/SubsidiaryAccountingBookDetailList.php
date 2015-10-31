<?php

namespace NetSuite\WebServices;

class SubsidiaryAccountingBookDetailList
{
    /**
     * @access public
     * @var SubsidiaryAccountingBookDetail[]
     */
    public $subsidiaryAccountingBookDetail;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "subsidiaryAccountingBookDetail" => "SubsidiaryAccountingBookDetail[]",
        "replaceAll" => "boolean",
    );
}
