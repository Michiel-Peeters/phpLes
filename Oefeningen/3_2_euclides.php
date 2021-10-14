<?php

$input1 = readline("geef een getal aub: ");
$input2 = readline("geef een getal aub: ");

function Euclides($g1, $g2)
{
    while ($g1 != $g2) {
        if ($g1 < $g2) {
            $g2 -= $g1;
        } else {
            $g1 -= $g2;
        }
    }
    print "de grootste gemeenschappelijke deler is $g1";
}

Euclides($input1, $input2);