<?php

require __DIR__ . '/autoload.php';

use NetSuite\WebServices\AddRequest;
use NetSuite\WebServices\Customer;

$customer = new Customer();
$customer->lastName = "Doe";
$customer->firstName = "John";
$customer->companyName = "ABC company X ";
$customer->phone = "123456789";

$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
