<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

use App\Service\Serializer;
use App\Controller\IndexController;
use App\Container;

print_r("Simple Service Container\n\n");

$container = new Container();

$container->addService('format.json', function() use ($container) {
    return new JSON();
});

$container->addService('format.xml', function() use ($container) {
    return new XML();
});

$container->addService('format', function() use ($container) {
    return $container->getService('format.xml');
});

$container->addService('serializer', function() use ($container) {
    return new Serializer($container->getService('format'));
});

$container->addService('controller.index', function() use ($container) {
    return new IndexController($container->getService('serializer'));
});

var_dump($container->getServices());
var_dump($container->getService('controller.index')->index());