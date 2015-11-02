<?php

require __DIR__ . '/autoload.php';

use NetSuite\WebServices\AddRequest;
use NetSuite\WebServices\PurchaseOrder;

$purchaseOrderFields = array(
    'entity' => array('internalId' => 1),
    'itemList' => array(
        'item' => array(
            array('item' => array('internalId' => 458),
                'quantity' => 5)),
        'replaceAll' => true
    )
);

$po = new PurchaseOrder();
\NetSuite\WebServices\setFields($po, $purchaseOrderFields);

$request = new AddRequest();
$request->record = $po;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR\n";
    var_dump($addResponse);
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
