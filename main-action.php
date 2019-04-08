<?php

use Bref\Hello;

require __DIR__.'/vendor/autoload.php';

lambda(function (array $event) {
    $class = new Hello();

    return $class->hello();
});
