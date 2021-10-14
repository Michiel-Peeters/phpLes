<?php
$cars = ["volvo", "BMW", "Toyota"];

foreach ($cars as $x) {
    print $x . "\n";
}

#sorteren
sort($cars);
#reverse
rsort($cars);
#sorteren maar behoud de keyvalue;
asort($cars);




#assosiatief
$prijzen = ["volvo" => 2500, "BMW" => 3500, "Toyota" => 11000];

foreach ($prijzen as $merk => $prijs) {
    print "$merk is $prijs €" . "\n";
}

#assosiatief meerdimensionaal
$cars_bouwjaar_prijs = ["volvo" => [2002, 2500], "BMW" => [2012, 3500], "Toyota" => [1968, 4500]];

foreach ($cars_bouwjaar_prijs as $merk => $data) {
    print "$merk: bouwjaar $data[0] en prijs € $data[1]" . "\n";
}