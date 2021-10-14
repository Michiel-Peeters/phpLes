<?php

Print5times("dit is de tekst");
OppervlakteRechthoek(5, 2);
VolumeBalk(5, 3, 2);


function Print5times($tekst)
{
    for ($i = 0; $i < 5; $i++) {
        print "$tekst\n";
    }
}

function OppervlakteRechthoek($lengte, $breedte)
{
    printf("De oppervlakte van de rechthoek is %d\n", $breedte * $lengte);
    return $lengte * $breedte;
}

function VolumeBalk($lengte, $breedte, $hoogte)
{
    $volume = OppervlakteRechthoek($lengte, $breedte) * $hoogte;
    print "Het volume van uw balk is $volume\n";
}