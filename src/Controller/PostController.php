<?php

namespace App\Controller;

use App\Service\Serializer;
use App\Annotations\Route;

/**
 * @Route(route="/posts")
 */
class PostController {
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
            'Action' => 'Post',
            'Time' => time()
        ]);
    }

    /**
     * @Route(route="/one")
     */
    public function one()
    {
        return $this->serializer->serialize([
            'Action' => 'PostOne',
            'Time' => time()
        ]);
    }
}