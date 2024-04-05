<?php

$owoce = array("jablko", "banan", "pomarancza", "sliwka", "truskawka");

foreach ($owoce as $owoc) {
    $dlugosc = strlen($owoc);
    $odwroconyOwoc = "";

    for ($i = $dlugosc - 1; $i >= 0; $i--) {
        $odwroconyOwoc .= $owoc[$i];
    }

    $naP = ($owoc[0] == 'p' || $owoc[0] == 'P') ? "tak" : "nie";

    echo $odwroconyOwoc . " czy na p: " . $naP . "\n";
}
?>