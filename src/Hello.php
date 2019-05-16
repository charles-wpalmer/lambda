<?php

namespace Bref;

class Hello
{
    public function hello()
    {
        $today = date('F Y d');
        return 'Hello, Charles. Today is ' . $today;
    }
}
