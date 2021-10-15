<?php

print Volume(OppervlakteCirkel(3), 0.5) . "l\n";
print Volume(OppervlakteCirkel(4), 0.6) . "l\n";
print Volume(OppervlakteCirkel(5.5), 0.8) . "l\n";

VolumeKegel(8, 12, 6) . "l";


function OppervlakteCirkel($diameter)
{
    $straal = $diameter / 2;
    $oppervlakte_cirkel = round($straal ** 2 * pi(), 2);
    return $oppervlakte_cirkel;
}

function Volume($oppervlakte, $hoogte)
{
    $volume = $oppervlakte * $hoogte;
    $volume_l = $volume * 1000;
    return $volume_l;
}

function VolumeKegel($diameter1, $diameter2, $hoogte)
{
    $straal1 = $diameter1 / 2;
    $straal2 = $diameter2 / 2;
    $volume_l = (1 / 3 * pi() * $hoogte * ($straal2 ** 2 + $straal1 * $straal2 + $straal1 ** 2)) *
        1000;

    printf("%.2fl", $volume_l);

}
