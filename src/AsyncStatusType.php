<?php

namespace NetSuite\WebServices;

class AsyncStatusType
{

    static $paramtypesmap = array();

    /**
     * @var string
     */
    const failed = "failed";

    /**
     * @var string
     */
    const finishedWithErrors = "finishedWithErrors";

    /**
     * @var string
     */
    const pending = "pending";

    /**
     * @var string
     */
    const processing = "processing";

    /**
     * @var string
     */
    const finished = "finished";
}
