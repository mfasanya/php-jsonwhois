<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use JsonWhois\JsonWhois;

$json = new JsonWhois();

$json->apiKey("TEST");

$res =  $json->whois('google.com');

print_r($res);