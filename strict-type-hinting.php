<?php
    // activate strict mode
    declare(strict_types=1);

    $x = 5;
    $y = '4';

    function sum(int $x, int $y)
    {
        echo $x+$y;
    }

    // It will throw an error! becaues $y is a string.
    sum($x, $y);

