<?php
$plik = 'linki.txt';
$dane = file($plik, FILE_IGNORE_NEW_LINES );

echo "<ul><br>";
foreach ($dane as $i) {
    list($link, $opis) = explode(';', $i);

    echo "<li><a href=\"$link\">$opis</a></li>\n";
}
echo "</ul>";
?>
