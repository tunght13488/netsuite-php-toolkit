<?php

namespace NetSuite\WebServices;

class MessageMediaItemList
{
    /**
     * @access public
     * @var File[]
     */
    public $mediaItem;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "mediaItem" => "File[]",
        "replaceAll" => "boolean",
    );
}
