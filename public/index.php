<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\BaseFormat;
use App\Format\NamedFormatInterface;

use App\Serializer;

print_r("Dependency Injection\n\n");

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$serializer = new Serializer(new XML());
var_dump($serializer->serialize($data));

// $formats = [
//     new JSON(),
//     new XML(),
//     new YAML()
// ];