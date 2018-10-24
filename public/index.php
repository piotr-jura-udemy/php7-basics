<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

print_r("Class fields & methods\n\n");

$json = new JSON();
$xml = new XML();
$yml = new YAML();

var_dump($json);
var_dump($xml);
var_dump($yml);