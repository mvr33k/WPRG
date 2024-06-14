<?php

if (!isset($_COOKIE['visit_number'])) {
    setcookie("visit_number", 1, time()+15);
}

if ($_COOKIE['visit_number']<7) {
    setcookie("visit_number", ++$_COOKIE['visit_number'], time()+15 );
}
else{
    setcookie("visit_number", ++$_COOKIE['visit_number'], time()+15 );
    echo "<h3> odwiedziłeś stronę " . $_COOKIE['visit_number'] . " razy </h3>";
}