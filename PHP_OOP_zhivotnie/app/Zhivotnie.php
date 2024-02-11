<?php

namespace App;

abstract class Zhivotnie 
{
    public string $name;
    public function name($name) {
        $this->name = $name;
        echo 'это животное по имени ' . $this->name . '<br>';
    }
}
