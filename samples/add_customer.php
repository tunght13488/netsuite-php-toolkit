<?php

require __DIR__ . '/../vendor/autoload.php';

use NetSuite\WebServices\AddRequest;
use NetSuite\WebServices\Customer;
use NetSuite\WebServices\NetSuiteService;

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$config = array(
    'endpoint' => getenv('ENDPOINT'),
    'host' => getenv('HOST'),
    'email' => getenv('EMAIL'),
    'password' => getenv('PASSWORD'),
    'role' => getenv('ROLE'),
    'account' => getenv('ACCOUNT'),
    'logdir' => dirname(__FILE__) . '/../logs',
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
