<?php
$g1 = readline("getal 1: ");
$g2 = readline("getal 2: ");

Euclides($g1, $g2);

function Euclides($g1, $g2)
{
    $getal1 = $g1;
    $getal2 = $g2;


    while ($g1 != $g2) {
        if ($g1 > $g2) {
            $g1 -= $g2;
        } else {
            $g2 -= $g1;
        }
    }
    print "De grootste gemene deler van $getal1 en $getal2 is $g1";
}