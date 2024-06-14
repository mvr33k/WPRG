<?php

global $database;
include 'navbar.php';
include 'baza.php';

if (isset($_GET['id'])) {


    $car = $database->query('SELECT * FROM samochody WHERE id=' . $_GET['id'])->fetch_assoc();
    $database->close();


    echo '
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
            <th>Rok</th>
            <th>Opis</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>' . htmlspecialchars($car['id']) . '</td>
            <td>' . htmlspecialchars($car['marka']) . '</td>
            <td>' . htmlspecialchars($car['model']) . '</td>
            <td>' . htmlspecialchars($car['cena']) . '</td>
            <td>' . htmlspecialchars($car['rok']) . '</td>
            <td>' . htmlspecialchars($car['opis']) . '</td>
        </tr>
    </tbody>
</table>
    ';
}