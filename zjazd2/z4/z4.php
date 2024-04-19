<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba = $_POST['liczba'];


    function isPrime($dosprawdzenia)
    {
        $count=1;
        if ($dosprawdzenia <= 1) {
            return $dosprawdzenia . "NIE jest liczbą pierwszą. liczba powtórzeń pętli: " . $count;
        }

        if ($dosprawdzenia <= 3) {
            return $dosprawdzenia . " jest liczbą pierwszą. liczba powtórzeń pętli: " . $count;
        }

        if ($dosprawdzenia % 2 == 0 || $dosprawdzenia % 3 == 0) {
            return $dosprawdzenia . " NIE jest liczbą pierwszą. liczba powtórzeń pętli: " . $count;
        }

        $check = 5;
        $step = 2;

        // Check using 6n ± 1 formula
        while ($check * $check <= $dosprawdzenia) {
            $count++;
            if ($dosprawdzenia % $check == 0) {
                return $dosprawdzenia . " NIE jest liczbą pierwszą. liczba powtórzeń pętli: " . $count;
            }
            $check += $step;
            $step = 6 - $step;
        }
        return $dosprawdzenia . " jest liczbą pierwszą. liczba powtórzeń pętli: " . $count;
    }


    echo isPrime($liczba);
}

?>