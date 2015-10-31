<?php

namespace NetSuite\WebServices;

class PurchaseOrderOrderStatus
{

    static $paramtypesmap = array();

    /**
     * @var string
     */
    const _closed = "_closed";

    /**
     * @var string
     */
    const _fullyBilled = "_fullyBilled";

    /**
     * @var string
     */
    const _partiallyReceived = "_partiallyReceived";

    /**
     * @var string
     */
    const _pendingBillingPartiallyReceived = "_pendingBillingPartiallyReceived";

    /**
     * @var string
     */
    const _pendingBilling = "_pendingBilling";

    /**
     * @var string
     */
    const _pendingReceipt = "_pendingReceipt";

    /**
     * @var string
     */
    const _pendingSupervisorApproval = "_pendingSupervisorApproval";

    /**
     * @var string
     */
    const _rejectedBySupervisor = "_rejectedBySupervisor";
}
