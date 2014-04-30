<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use JsonWhois\JsonWhois;

$API = new JsonWhois();

$API->apiKey("534c6f9e5febdb3a00109b1a");

$data['whois'] =  $API->whois('bloom.com');
$data['screenshot'] =  $API->screenshot('bloom.com');

print_r($data);