<?php

require __DIR__ . '/../vendor/autoload.php';

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
