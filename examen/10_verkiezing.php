<?php
$stemmen = [
    "NVA" => 2455,
    "SP-A" => 2856,
    "CD&V" => 1501,
    "GROEN" => 1744,
    "OPEN-VLD" => 1988,
    "VLAAMSBELANG" => 586,
    "PVDA" => 697
];

$totaal_stemmen = 0;
$totaal_percentage = 0;

foreach ($stemmen as $partij => $stem) {
    $totaal_stemmen += $stem;
}

print "Totaal aantal stemmen: $totaal_stemmen\n\n";

foreach ($stemmen as $partij => $stem) {
    $stem = number_format($stem / $totaal_stemmen * 100, 2);
    print "$partij";
    RechtsUitlijnen($stem, 70 - strlen($partij));
    $totaal_percentage += $stem;
}

$totaal_string = "Totaal van de percentages: ";
print $totaal_string;
RechtsUitlijnen(number_format($totaal_percentage, 2), 70 - strlen
    ($totaal_string));


function RechtsUitlijnen($text, $charlenght)
{
    for ($i = 0; $i < $charlenght - strlen($text); $i++) {
        print " ";
    }
    print $text . "\n";
}
