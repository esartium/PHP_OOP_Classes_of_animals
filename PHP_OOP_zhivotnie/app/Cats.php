<?php

namespace App;

class Cats extends Cattish
{
    public function __construct($name) {
        echo 'это кошка' . '<br>';
        $this->name($name);
        $this->sign();
        $this->hish();
    }

    public function speak() {
        echo '<br>';
        for ($i = 0; $i < mt_rand(1, 10); $i++) {
            echo 'мяу ';
        }
        echo '<br>';
    }

    public function poglad() {
        echo 'вам откусили руку' . '<br>';
        }

    public function korm() {
        echo 'кошка посмотрела на вас с отвращением';
    }
}