<?php

namespace NetSuite\WebServices;

class DetachReference
{
    /**
     * @access public
     * @var BaseRef
     */
    public $detachFrom;

    static $paramtypesmap = array(
        "detachFrom" => "BaseRef",
    );
}
