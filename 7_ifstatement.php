<?php
function vergelijkMet100($getal)
{
    if ($getal > 100) {
        return "Groter";
    } elseif ($getal < 100) {
        return "Kleiner";
    } else {
        return "Gelijk aan";
    }
}

$a = 20;
printf("%d is " . vergelijkMet100($a) . " 100\n", $a);
$b = 100;
printf("%d is " . vergelijkMet100($b) . " 100\n", $b);
$c = 120;
printf("%d is " . vergelijkMet100($c) . " 100\n", $c);