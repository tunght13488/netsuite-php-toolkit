<?php

require __DIR__ . '/../vendor/autoload.php';

use NetSuite\WebServices\AddRequest;
use NetSuite\WebServices\Customer;
use NetSuite\WebServices\NetSuiteService;

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$config = array(
    'nsendpoint' => getenv('ENDPOINT'),
    'nshost' => getenv('HOST'),
    'nsemail' => getenv('EMAIL'),
    'nspassword' => getenv('PASSWORD'),
    'nsrole' => getenv('ROLE'),
    'nsaccount' => getenv('ACCOUNT'),
);

$service = new NetSuiteService($config);

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
