<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

use App\Service\Serializer;

print_r("Simple Service Container\n\n");

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$serializer = new Serializer(new XML());
var_dump($serializer->serialize($data));