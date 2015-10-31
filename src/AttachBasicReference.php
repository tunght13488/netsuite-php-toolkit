<?php

namespace NetSuite\WebServices;

class AttachBasicReference extends AttachReference
{
    /**
     * @access public
     * @var BaseRef
     */
    public $attachedRecord;

    static $paramtypesmap = array(
        "attachedRecord" => "BaseRef",
    );
}
