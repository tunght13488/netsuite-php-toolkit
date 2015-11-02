<?php

require __DIR__ . '/autoload.php';

use NetSuite\WebServices\AsyncAddListRequest;
use NetSuite\WebServices\CheckAsyncStatusRequest;
use NetSuite\WebServices\Customer;
use NetSuite\WebServices\GetAsyncResultRequest;

// create Customer record
$customer1 = new Customer();

$name = 'customer_php_async_1';

$customerFields1 = array(
    //'entityId' => $name,
    'companyName' => $name,
    'externalId' => $name
);

\NetSuite\WebServices\setFields($customer1, $customerFields1);

$customer2 = new Customer();

$name2 = 'customer_php_async_2';

$customerFields2 = array(
    //'entityId' => $name2,
    'companyName' => $name2,
    'externalId' => $name2
);

\NetSuite\WebServices\setFields($customer2, $customerFields2);

// perform async add operation
$asyncRequest = new AsyncAddListRequest();
$asyncRequest->record = array($customer1, $customer2);
$checkAsync = $service->asyncAddList($asyncRequest);

// get job id
$jobId = $checkAsync->asyncStatusResult->jobId;
$checkAsyncRequest = new CheckAsyncStatusRequest();
$checkAsyncRequest->jobId = $jobId;

while ($checkAsync->asyncStatusResult->status == 'pending' || $checkAsync->asyncStatusResult->status == 'processing') {
    echo $checkAsync->asyncStatusResult->status . "\n";
    sleep(10);
    $checkAsync = $service->checkAsyncStatus($checkAsyncRequest);
}

// once it is done processing, get the result
$getAsyncRequest = new GetAsyncResultRequest();
$getAsyncRequest->jobId = $jobId;
$getAsyncRequest->pageIndex = "1";

$result = $service->getAsyncResult($getAsyncRequest);
var_dump($result->asyncResult);

