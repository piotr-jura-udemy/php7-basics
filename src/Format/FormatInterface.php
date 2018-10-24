<?php

namespace App\Format;

interface FormatInterface {
    public function convert(): string;
    public function setData(array $data): void;
}