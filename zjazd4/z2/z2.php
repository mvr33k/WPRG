<?php
$wejscia = "licznik.txt";

if (file_exists($wejscia)) {
    $licznik = file_get_contents($wejscia);
    $licznik++;
} else {
    $licznik = 1;
    file_put_contents($wejscia, $licznik);
}

file_put_contents($wejscia, $licznik);
?>

<!DOCTYPE html>
<html lang="pl">
<body>
<?php echo $licznik; ?>
</body>
</html>
