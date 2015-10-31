<?php

namespace NetSuite\WebServices;

class DetachBasicReference extends DetachReference
{
    /**
     * @access public
     * @var BaseRef
     */
    public $detachedRecord;

    static $paramtypesmap = array(
        "detachedRecord" => "BaseRef",
    );
}
