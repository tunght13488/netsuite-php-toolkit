<?php

namespace NetSuite\WebServices;

class AsyncGetListResult extends AsyncResult
{
    /**
     * @access public
     * @var ReadResponseList
     */
    public $readResponseList;

    static $paramtypesmap = array(
        "readResponseList" => "ReadResponseList",
    );
}
