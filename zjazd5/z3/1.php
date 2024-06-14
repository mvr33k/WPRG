<?php
session_start();
if (!isset($_COOKIE['visit_number'])) {
    setcookie("visit_number", 1, time()+15);
}

if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true;
    setcookie('visit_number', ++$_COOKIE['visit_number'], time() + 60 );
}

if($_COOKIE['visit_number'] > 4){
    echo "<p> odwiedziłeś stronę " . $_COOKIE['visit_number'] . " razy </p>";
}