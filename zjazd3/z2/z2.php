<?php

function fibonacciRecursive($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
}

function fibonacciIterative($n) {
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib[$n];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = isset($_POST['number']) ? $_POST['number'] : 0;

    $startRecursive = microtime(true);
    $resultRecursive = fibonacciRecursive($userInput);
    $endRecursive = microtime(true);
    $durationRecursive = $endRecursive - $startRecursive;

    $startIterative = microtime(true);
    $resultIterative = fibonacciIterative($userInput);
    $endIterative = microtime(true);
    $durationIterative = $endIterative - $startIterative;

    if ($resultRecursive === $resultIterative) {
        echo "Wyniki obu funkcji są zgodne: $resultRecursive\n";
    } else {
        echo "Wyniki obu funkcji są różne:\nRekurencyjna: $resultRecursive\nNierekurencyjna: $resultIterative\n";
    }

    echo "Czas wykonania funkcji rekurencyjnej: $durationRecursive sekund\n";
    echo "Czas wykonania funkcji nierekurencyjnej: $durationIterative sekund\n";

    if ($durationRecursive < $durationIterative) {
        echo "Funkcja rekurencyjna działała szybciej o " . ($durationIterative - $durationRecursive) . " sekund.\n";
    } else {
        echo "Funkcja nierekurencyjna działała szybciej o " . ($durationRecursive - $durationIterative) . " sekund.\n";
    }
}

?>
