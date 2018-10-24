<?php

namespace App\Service;

use App\Format\FormatInterface;

class Serializer {
    private $format;

    public function __construct(FormatInterface $format) {
        $this->format = $format;    
    }

    public function serialize($data): string {
        $this->format->setData($data);

        return $this->format->convert();
    }
}