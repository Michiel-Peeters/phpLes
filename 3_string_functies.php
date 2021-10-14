<?php
$tekst = "<h1> belangrijk nieuws: </h1> <p> van Volksgezondheid Frank Vandenbroucke (Vooruit)" .
    " wil ‘voluit inzetten’ op laagdrempelige psychologische groepssessies." .
    " Tijdens een openingscollege aan de KU Leuven stelde hij zijn aanpak voor het najaar voor.</p>";


print "$tekst\n";
#eerste 8 tekens van de string nemen 0 is start als je geen lengte opgeeft leest hij tot het einde
print substr($tekst, 0, 8) . "\n";
print strlen($tekst) . "\n";
print strpos($tekst, "van") . "\n"; #waar staat op in de tekst +1

if (strpos($tekst, "<h1>") === false) print "ik vind geen heading in de tekst";
else print "gevonden";