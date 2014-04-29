<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use JsonWhois\JsonWhois;

$API = new JsonWhois();

$API->apiKey("API KEY");

$data['whois'] =  $API->whois('google.com');
$data['screenshot'] =  $API->screenshot('google.com');

print_r($data);