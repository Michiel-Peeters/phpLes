<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$aantal_taarten = readline("Hoeveel taarten? ");
$aantal_deelnemers = readline("Hoeveel deelnemers? ");
TaartenVerdelen($aantal_taarten, $aantal_deelnemers);
//test
function TaartenVerdelen($aantal_taarten, $aantal_deelnemers)
{
    $algemene_verdeling = $aantal_deelnemers / $aantal_taarten;
    $restwaarde = $aantal_deelnemers % $aantal_taarten;
    print "algemeen = $algemene_verdeling\n";
    print "rest = $restwaarde\n";
    if ($aantal_deelnemers % $aantal_taarten !== 0) {

        #berekenen aantal taarten
        $taarten1 = $aantal_taarten - $restwaarde;
        $taarten2 = $restwaarde;

        #berekenen aantal stukken
        $stukken = intdiv($aantal_deelnemers, $aantal_taarten);
        $stukken_rest = $stukken + 1;


        printf("Je hebt %d taarten voor %d deelnemers.\n", $aantal_taarten, $aantal_deelnemers);
        printf("je moet %d taarten in %d stukken verdelen.\n", $taarten1, $stukken);
        printf("je moet %d taarten in %d stukken verdelen.\n", $taarten2, $stukken_rest);
    } else {
        printf("elke taart wordt in %d stukken verdeeld voor %d deelnemers.\n",
            $algemene_verdeling,
            $aantal_deelnemers);
    }
}

