<?php
// 1 1 2 3 5...
// firstNumber - liczba po lewej stronie dodawania
// secondNumber - liczba po prawej stronie dodawania
// thirdNumber - wynik dodawania
// second number na firstnumber
// a thirdnumber na second
// 2 jedynki jako 2 pierwsze liczby są pewne więc zaczynamy od 3

$firstNumber=$secondNumber=$thirdNumber=1;
$whichnumber=readline("Ktora liczba fibonacciego obliczyc");
$fibonacciNumbers = array(1,1);


for ($i=3; $i<=$whichnumber; $i++){
    $thirdNumber=$firstNumber+$secondNumber;
    $firstNumber=$secondNumber;
    $secondNumber=$thirdNumber;
    array_push($fibonacciNumbers, $thirdNumber);
}

//foreach ($fibonacciNumbers as $i) echo $i . " ";

// program wypisze nieparzyste elementy tablicy. Każdy element
//powinien być w nowej linii, a linie powinny być ponumerowane
$line=1;
foreach ($fibonacciNumbers as $fibNum){
    if ($fibNum%2==0) continue;
    else {
        echo $line . " " . $fibNum . "\n";
        $line++;
    }
}