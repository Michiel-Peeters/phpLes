<?php

$deler = 7;

for ($i = 0; $i < 20; $i++) {
    $getal = random_int(100, 999);

    if (DeelbaarDoor($getal, $deler)) {
        print "$getal is deelbaar door $deler\n";
    } else {
        print "$getal\n";
    }
}

function DeelbaarDoor($getal, $deler)
{
    if ($getal % $deler == 0) {
        return true;
    } else {
        return false;
    }
}