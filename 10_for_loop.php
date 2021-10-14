<?php
$tekst = "print dit af";

for ($i = 0; $i<5; $i++){
    if ($i > 3){
        break;
    }
    print "$tekst\n";
}