<?php

$work = true;

while ($work == true) {
    echo "\n";
    $number = readline('podaj numer: ');
    $checkIfPrime = true;

    if ($number == null) {
        $work = false;
        break;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $checkIfPrime = false;
            break;
        }

    }

    if ($checkIfPrime == true) echo $number . " to liczba pierwsza";
    else echo $number . " to nie liczba pierwsza";
}

?>