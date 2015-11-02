<?php

require __DIR__ . '/autoload.php';

use NetSuite\WebServices\AddRequest;
use NetSuite\WebServices\Customer;

$customer = new Customer();
$customerFields = array(
    'firstName' => "Joe",
    'lastName' => "Doe",
    'companyName' => "setFields ABC company",
    'phone' => "123456789",
    'email' => "joe.doe@abc.com",
);
\NetSuite\WebServices\setFields($customer, $customerFields);

$request = new AddRequest();
$request->record = $customer;

$addResponse = $service->add($request);

if (!$addResponse->writeResponse->status->isSuccess) {
    echo "ADD ERROR";
} else {
    echo "ADD SUCCESS, id " . $addResponse->writeResponse->baseRef->internalId;
}

