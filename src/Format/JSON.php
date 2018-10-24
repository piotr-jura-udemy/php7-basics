<?php

namespace App\Format;

class JSON extends BaseFormat {
    public function convert()
    {
        return json_encode($this->data);
    }
}