<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\BaseFormat;
use App\Format\NamedFormatInterface;

print_r("Anonymous functions\n\n");

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$formats = [
    new JSON($data),
    new XML($data),
    new YAML($data)
];