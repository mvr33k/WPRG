<?php

global $database;
include 'navbar.php';
include 'baza.php';


global $database;


$result = $database->query('SELECT * FROM samochody ORDER BY rok ASC');
$database->close();

echo '
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
        </tr>
    </thead>
    <tbody>
';
foreach ($result as $car) {
    echo '
        <tr>
            <td><a href="info.php?id='. htmlspecialchars($car['id']) . '">' . htmlspecialchars($car['id']) . '</a>
            <td>' . htmlspecialchars($car['marka']) . '</td>
            <td>' . htmlspecialchars($car['model']) . '</td>
            <td>' . htmlspecialchars($car['cena']) . '</td>
        </tr>
    ';
}