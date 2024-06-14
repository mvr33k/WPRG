<?php

global $database;
include 'navbar.php';
include 'baza.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];

    $insert = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ($marka,$model,$cena,$rok,$opis)";
    $database->query($insert);
}
?>
<br><br>
<form method="post">
    <label for="marka">marka: </label>
    <input type="text" id="marka" name="marka" required><br>

    <label for="model">model: </label>
    <input type="text" id="model" name="model" required><br>

    <label for="cena">cena:</label>
    <input type="number" step="0.01" id="cena" name="cena" required><br>

    <label for="rok">rok:</label>
    <input type="number" id="rok" name="rok" required><br>

    <label for="opis">opis:</label>
    <textarea id="opis" name="opis" required></textarea><br>

    <button type="submit">dodaj</button>
</form>
