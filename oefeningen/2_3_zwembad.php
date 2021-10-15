<?php

volume(1.5, 0.5);
volume(2, 0.6);
volume(5.5 / 2, 0.8);

function oppervlakte($straal)
{
    $oppervlakte_cirkel = round($straal ** 2 * pi(), 2);
    return $oppervlakte_cirkel;
}

function volume($straal, $hoogte)
{
    $volume_m3 = oppervlakte($straal) * $hoogte;
    $volume_l = $volume_m3 * 1000;
    printf("inhoud van het zwembad in l = %.2f\n", $volume_l);
}

function InhoudKegel($diameter1, $diameter2, $hoogte)
{
    $straal1=$diameter1/2;
    $straal2=$diameter2/2;
    $vol = round(1/3*pi()*$hoogte*($straal1**2+$straal1*$straal2+$straal2**2),2)*1000;

    print "Het zwembad bevat $vol l water\n";

}

InhoudKegel(8, 12, 6);