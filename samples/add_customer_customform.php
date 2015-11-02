<?php

require_once __DIR__ . '/autoload.php';

use NetSuite\WebServices\AddRequest;
use NetSuite\WebServices\Customer;
use NetSuite\WebServices\RecordRef;

$customer = new Customer();
$customer->lastName = "Doe";
$customer->firstName = "John";
$customer->companyName = "ABC company";
$customer->phone = "123456789";
$customer->email = "joe.doe@abc.com";

$customer->customForm = new RecordRef();
$customer->customForm->internalId = -8;

$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}
