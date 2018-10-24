<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

print_r("Class fields & methods\n\n");

$json = new JSON([
    "key" => "value",
    "another_key" => "another_value"
]);
$xml = new XML();
$yml = new YAML();

var_dump($json);
// var_dump($xml);
// var_dump($yml);

// $json->data = [];
var_dump($json->getData());
// $json->setData([]);
// var_dump($json->getData());

// var_dump($json->toJSON());

var_dump($json->convert());
var_dump((string)$json);
// var_dump(JSON::DATA);
// var_dump(JSON::convertData());