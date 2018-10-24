<?php

namespace App\Format;

class YAML extends BaseFormat {
    public function convert()
    {
        $result = '';

        foreach ($this->data as $key => $value) {
            $result .= $key.': '.$value."\n";
        }

        return htmlspecialchars($result);
    }
}