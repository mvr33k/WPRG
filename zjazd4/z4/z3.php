<?php
$plik = 'ip.txt';
$remote_ip = $_SERVER['REMOTE_ADDR'];

$dozwolone = file($plik, FILE_IGNORE_NEW_LINES );

if (in_array($remote_ip, $dozwolone)) include '1.html';
else include '0.html';

?>