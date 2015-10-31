<?php

namespace NetSuite\WebServices;

class AttachReference
{
    /**
     * @access public
     * @var BaseRef
     */
    public $attachTo;

    static $paramtypesmap = array(
        "attachTo" => "BaseRef",
    );
}
