<?php
$kapitaal = readline("Wat is het kapitaal?: ");
$intrest = readline("Wat is de intrest in %?: ");
$looptijd = readline("Wat is de looptijd?: ");
$is_limiet = readline("Is er een limiet?: ");
if ($is_limiet == "y"){
    $limiet = readline("Wat is de limiet? ");
}


print "      Jaar      Kapitaal      Rente\n";


for ($i = 1; $i <= $looptijd; $i++) {
    if ($kapitaal > $limiet && $limiet != 0){
        break;
    }
    $rente = $kapitaal / 100 * $intrest;
    RechtsUitlijnen($i, 6 + strlen("jaar"));
    RechtsUitlijnen(number_format($kapitaal, 2), 6 + strlen("Kapitaal"));
    RechtsUitlijnen(number_format($rente, 2), 6 + strlen("Rente"));
    print "\n";
    $kapitaal += $rente;
}

function RechtsUitlijnen($text, $charlenght)
{
    for ($i = 0; $i < $charlenght - strlen($text); $i++) {
        print " ";
    }
    print $text;
}