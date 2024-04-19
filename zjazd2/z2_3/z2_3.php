<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczbaosob = $_POST['liczbaosob'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $karta = $_POST['karta'];
    $mail = $_POST['mail'];
    $przyjazd = $_POST['przyjazd'];
    $wyjazd = $_POST['wyjazd'];
    $godzina = $_POST['godzina'];
    $udogodnienia = isset($_POST['udogodnienia']) ? $_POST['udogodnienia'] : [];
    $udogodnienia_str = implode(', ', $udogodnienia);
echo "
<h1> Potwierdzenie rezerwacji </h1>
<h3>Ilość osób: $liczbaosob </h3> 
<h3>Dane osoby rezerwującej</h3>
Imie: $imie <br>
Nazwisko $nazwisko <br>
Adres $adres <br>
Nr. karty kredytowej: $karta <br>
e-mail: $mail <br>
<h3>Informacje o pobycie</h3>
Dzień przyjazdu: $przyjazd <br>
Dzień wyjazdu: $wyjazd <br>
Godzina przyjazdu: $godzina <br>
<h3>Udogodnienia</h3>
Udogodnienia: $udogodnienia_str 
";
}
?>