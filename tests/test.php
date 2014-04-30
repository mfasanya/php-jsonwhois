<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use JsonWhois\JsonWhois;

$API = new JsonWhois();

$API->apiKey("API KEY");

$data['whois'] =  $API->whois('bloom.com');
$data['screenshot'] =  $API->screenshot('bloom.com');

print_r($data);