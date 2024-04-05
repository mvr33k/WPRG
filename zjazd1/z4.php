<?php

$tablicaTekstu = explode(" ", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");

//usuń wszystkie elementy ze znakami interpunkcyjnymi, używając pętli.
//Przeiteruj się przez każdy element tabeli, sprawdź, czy ten element jest znakiem
//interpunkcyjnym, jeśli jest, to usuń go przez przesunięcie każdego następnego elementu

foreach ($tablicaTekstu as $i) echo $i . " ";


$punctation = array(".", ";", ",", ":", "-", "?", "!");

for ($wordCount = 0; $wordCount < count($tablicaTekstu); $wordCount++) {
    for ($letterCount = 0; $letterCount < strlen($tablicaTekstu[$wordCount]); $letterCount++) {
        if (in_array($tablicaTekstu[$wordCount][$letterCount], $punctation)) {
            for ($i = $wordCount; $i < count($tablicaTekstu); $i++) {
                if ($i + 1 < count($tablicaTekstu)) $tablicaTekstu[$i] = $tablicaTekstu[$i + 1];
            }
            array_pop($tablicaTekstu);
            $wordCount--;
            break;
        }
    }
}


echo "\n";
foreach ($tablicaTekstu as $i) echo $i . " ";
echo "\n";

$hashTable = array();
for ($i = 0; $i < count($tablicaTekstu) - 1; $i += 2) {
    if (isset($tablicaTekstu[$i]) && isset($tablicaTekstu[$i + 1])) {
        $assocArray[$tablicaTekstu[$i]] = $tablicaTekstu[$i + 1];
    }
}

foreach ($assocArray as $key => $value) {
    echo $key . " : " . $value . "\n";
}

?>