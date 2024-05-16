<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plik = $_FILES["file"]["name"];
    $linijki = file($plik, FILE_IGNORE_NEW_LINES);
    $odwrocone_linijki = array_reverse($linijki);
    $odwrocony_plik = "odwrocony_" . basename($_FILES["file"]["name"]);
    file_put_contents($odwrocony_plik, implode("\n", $odwrocone_linijki));
    echo "<h3>Odwrócone linijki:</h3>";
    echo "<pre>";
    readfile($odwrocony_plik);
}
?>