<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\BaseFormat;
use App\Format\NamedFormatInterface;

print_r("Reflections\n\n");

$data = [
    "name" => "John",
    "surname" => "Doe"
];

// $formats = [
//     new JSON($data),
//     new XML($data),
//     new YAML($data)
// ];

$class = new ReflectionClass(JSON::class);
var_dump($class);
$method = $class->getConstructor();
var_dump($method);
$parameters = $method->getParameters();
var_dump($parameters);

foreach ($parameters as $parameter) {
    $type = $parameter->getType();
    var_dump((string)$type);
    var_dump($type->isBuiltin());
    var_dump($parameter->allowsNull());
    var_dump($parameter->getDefaultValue());
}