<?php
$lijst = [14, 5, 8, 9, 13, 18, 16, 25];
$G = Gemiddelde($lijst);
$avg = array_sum($lijst) / sizeof($lijst);


print($G)."\n";
print($avg);

function Gemiddelde($array)
{
    $teller = 0;
    $som = 0;
    foreach ($array as $getal) {
        $teller++;
        $som += $getal;
    }
    return $som / $teller;
}