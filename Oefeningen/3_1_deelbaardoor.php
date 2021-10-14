<?php

function DeelbaarDoor($random_number, $deler)
{
        if ($random_number % $deler == 0) {
            return true;
        } else {
            return false;
        }
}

$deler = 7;
for ($i = 0; $i < 20; $i++) {
    $random_number = random_int(100, 999);
    if (DeelbaarDoor($random_number, $deler)) {
        print "$random_number is deelbaar door $deler\n";
    } else {
        print "$random_number\n";
    }
}
