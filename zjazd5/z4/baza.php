<?php
$database = new mysqli('localhost:3306', 'root',
    'password', 'mojabaza');

// Checking for connections
if ($database->connect_error) {
    die('Błąd połączenia z bazą (' .
        $database->connect_errno . ') ' .
        $database->connect_error);
}