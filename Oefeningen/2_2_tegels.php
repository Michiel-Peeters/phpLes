<?php
$lengte_kamer = readline("Lengte van de kamer in cm: ");
$breedte_kamer = readline("breedte van de kamer in cm: ");;
$tegel_x = readline("Lengte van de tegel in cm: ");;
$tegel_y = readline("breedte van de tegel in cm: ");;

$aantal_tegels = ceil($lengte_kamer/$tegel_x)*ceil($breedte_kamer/$tegel_y);


printf("Je moet %d tegels van %.2f cm x %.2f cm kopen voor een kamer van %d op %d cm.",
    $aantal_tegels,$tegel_x,$tegel_y,$lengte_kamer,$breedte_kamer);