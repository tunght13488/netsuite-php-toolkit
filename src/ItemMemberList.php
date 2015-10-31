<?php

namespace NetSuite\WebServices;

class ItemMemberList
{
    /**
     * @access public
     * @var ItemMember[]
     */
    public $itemMember;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "itemMember" => "ItemMember[]",
        "replaceAll" => "boolean",
    );
}
