<?php

namespace NetSuite\WebServices;

class AsyncInitializeListResult extends AsyncResult
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
