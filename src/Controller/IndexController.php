<?php

namespace App\Controller;

use App\Service\Serializer;
use App\Annotations\Route;

/**
 * @Route(route="/")
 */
class IndexController {
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route(route="/")
     */
    public function index() 
    {
        return $this->serializer->serialize([
            'Action' => 'Index',
            'Time' => time()
        ]);
    }
}