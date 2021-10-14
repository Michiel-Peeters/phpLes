<?php
function HetIsGroen($dier)
{
    if ($dier == "kikker" or $dier == "krokodil") {
        return true;
    }
    return false;
}

$dier = "leeuw";
if (HetIsGroen($dier)) print "$dier is groen!\n";
$dier = "kikker";
if (HetIsGroen($dier)) print "$dier is groen!\n";
$dier = "krokodil";
if (HetIsGroen($dier)) print "$dier is groen!\n";
$dier = "paard";
if (HetIsGroen($dier)) print "$dier is groen!\n";