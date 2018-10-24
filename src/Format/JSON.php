<?php

namespace App\Format;

class JSON {
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function convert()
    {
        return $this->toJSON();
    }

    public function __toString()
    {
        return $this->toJSON();
    }

    private function toJSON() 
    {
        return json_encode($this->data);
    }
}