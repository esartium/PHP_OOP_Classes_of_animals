<?php

namespace App;

class Dogs extends Hishniki
{
    public function __construct($name) {
        echo 'это собака' . '<br>';
        $this->name($name);
        $this->sign();
        $this->hish();
    }

    public function speak() {
        echo '<br>';
        for ($i = 0; $i < mt_rand(1, 10); $i++) {
            echo 'гав ';
        }
        echo '<br>';
    }
    public function korm() {
        echo 'собака счастлива' . '<br>';
    }

    public function poglad() {
        echo 'собака очень счастлива' . '<br>';
    }
}