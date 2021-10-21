<?php
#start variabele
$key = null;
$lijst = [];

#blijf artikels toevoegen tot de gebruiker q ingeeft
while ($key != "q") {
    $key = readline("Welk artikel? ");
    if ($key == "q") {
        break;
    }
    $value = readline("Aantal? ");
    $lijst += array($key => $value);
}


#aanspreken van de lijst
Boodschappenlijstje($lijst);


#functie die de lijst zal printen
function Boodschappenlijstje($lijst)
{
    $size_van_lijst = sizeof($lijst); #aantal keys in de array
    ksort($lijst); #sorteren van array
    $som = 0; #som die we later zullen gebruiken

    #printen van de array
    print "-------------B O O D S C H A P P E N-------------\n";
    foreach ($lijst as $artikel => $aantal) {
        print $artikel;
        RechtsUitlijnen($aantal, 49 - strlen($artikel));
        $som += $aantal;
    }
    print "-------------------------------------------------\n";
    $aantal_tekst = "Aantal lijnen: $size_van_lijst";
    $aantal_producten = "Totaal: $som";
    print "$aantal_tekst";
    RechtsUitlijnen($aantal_producten,49-strlen($aantal_tekst)); #overige plaats
    print "-------------------------------------------------\n";
}


#functie die tekst uitlijnt
function RechtsUitlijnen($text, $charlenght)
{
    for ($i = 0; $i < $charlenght - strlen($text); $i++) {
        print " ";
    }
    print $text . "\n";
}