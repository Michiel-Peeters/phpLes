<?php

RechtsUitlijnen("Banaan", 70);
RechtsUitlijnen("nog een Banaan", 70);
RechtsUitlijnen("2.30 Euro", 70);
RechtsUitlijnen("Dit is een hele lange zin", 70);
RechtsUitlijnen("14.10 Euro", 70);

function RechtsUitlijnen($text, $charlenght){
    for ($i = 0; $i < $charlenght-strlen($text); $i++){
        print " ";
    }
    print $text."\n";
}