<?php
$aantal_taarten = readline("aantal taarten: ");
$aantal_deelnemers = readline("aantal deelnemers: ");

$algemene_taartverdeling = intdiv($aantal_deelnemers, $aantal_taarten);
$rest_taarten = $aantal_deelnemers % $aantal_taarten;

printf("Je hebt %d taarten voor %d deelnemers.\n", $aantal_taarten,$aantal_deelnemers);


if ($rest_taarten != 0){
    $taarten1 = $aantal_taarten - $rest_taarten;
    $taarten2_stukken = $algemene_taartverdeling+1;
    printf("Je moet %d taarten in %d stukken snijden.\n", $taarten1, $algemene_taartverdeling);
    printf("en %d taarten in %d stukken snijden.\n", $rest_taarten, $taarten2_stukken);

}
else{
    printf("Je moet de taarten in %d stukken snijden.", $algemene_taartverdeling);
}