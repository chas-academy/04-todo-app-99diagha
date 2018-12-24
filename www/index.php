<?php
declare(strict_types=1);

echo add(5, 14);

function add(int $a, int $b) : int
{
    return $a + $b;
}
