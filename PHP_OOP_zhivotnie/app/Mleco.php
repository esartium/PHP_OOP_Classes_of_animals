<?php

namespace App;

abstract class Mleco extends Zhivotnie
{
    public function sign() {
        echo 'это млекопитающее' . '<br>';
    }
}