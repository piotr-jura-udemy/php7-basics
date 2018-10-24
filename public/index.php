<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Kernel;

// print_r("Annotations\n\n");

$kernel = (new Kernel())->boot();
$kernel->handleRequest();