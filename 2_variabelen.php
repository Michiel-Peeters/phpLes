<?php
$a = 5;
$b = 10;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a ** $b; #macht berekenen
$h = "een stuk tekst";
$colors = ["rood","blauw", 20.5,"geel"]; #array

print  "c is een ". gettype($c). " en c= $c\n";
print  "d is een ". gettype($d). " en d= $d\n";
print  "e is een ". gettype($e). " en e= $e\n";
print  "f is een ". gettype($f). " en f= $f\n";
print  "g is een ". gettype($g). " en g= $g\n";
print  "h is een ". gettype($h). " en h= $h\n";
print  var_dump($colors);