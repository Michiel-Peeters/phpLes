<?php
$lengte_kamer = readline("Lengte van de kamer in cm: ");
$breedte_kamer = readline("Breedte van de kamer in cm: ");
$lengte_tegel = readline("Lengte van de tegel in cm: ");
$breedte_tegel = readline("Breedte van de tegel in cm: ");

$aantal_tegels= (ceil($lengte_kamer/$lengte_tegel) * ceil($breedte_kamer/$breedte_tegel));

print "Je hebt $aantal_tegels tegels nodig om de vloer te leggen";