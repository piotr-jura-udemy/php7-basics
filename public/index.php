<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

print_r("Inheritance\n\n");

$json = new JSON([
    "name" => "John",
    "surname" => "Doe"
]);
$xml = new XML();
$yml = new YAML();

var_dump($json);
var_dump($xml);
var_dump($yml);

print_r("\n\nResult of conversion\n\n");
var_dump($json->convert());
// var_dump($xml->convert());
// var_dump($yml->convert());