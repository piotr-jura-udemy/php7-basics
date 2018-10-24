<?php

namespace App\Controller;

use App\Service\Serializer;

class PostController {
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function index() 
    {
        return $this->serializer->serialize([
            'Action' => 'Post',
            'Time' => time()
        ]);
    }
}