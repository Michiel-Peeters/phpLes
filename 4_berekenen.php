<?php
$a = 44;
$b = 8;
$c = intdiv($a, $b); #gehele deling 8 gaat 5 keer in 44
$d = $a % $b; #rest van de deling is 4
$e = $a * $b;
$f = $a / $b;
$g = $a ** $b; #macht berekenen
print "$c\n";
print "$d\n";

$bank = 3630576571 %97; #checkdidget
print "$bank\n";

//geeft type van variabele en waarde
var_dump($a,$b,$c,$d,$bank);
