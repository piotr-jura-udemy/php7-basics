<?php
declare(strict_types=1);

namespace App\Format;

interface NamedFormatInterface {
    public function getName(): string;
}