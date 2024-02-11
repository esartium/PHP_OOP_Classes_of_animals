<?php

namespace App;

class Birds extends Zhivotnie
{
    public function __construct($name) {
        echo 'это птица' . '<br>';
        $this->name($name);
    }
    
    public function speak() {
        echo '<br>';
        for ($i = 0; $i < mt_rand(1, 10); $i++) {
            echo 'чирик ';
        }
        echo '<br>';
    }

    public function korm() {
        echo 'птица поела' . '<br>';
    }

    public function poglad() {
        echo 'птица не поняла, что вы от неё хотите' . '<br>';
    }
}