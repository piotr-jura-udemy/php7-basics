<?php

namespace App\Format;

class JSON {
    const DATA = [
        "success" => true
    ];
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function convert()
    {
        return json_encode(
            array_merge(
                self::DATA,
                $this->data
            )
        );
    }

    public static function convertData()
    {
        return json_encode(self::DATA);
    }
}