<?php

function handleDirectory($path, $directory, $operation = 'read') {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    if (!is_dir($path . $directory) && $operation !== 'create') {
        return "Katalog nie istnieje.";
    }

    switch ($operation) {
        case 'read':
            $contents = scandir($path . $directory);
            return $contents ? implode(", ", $contents) : "Katalog jest pusty.";
        case 'delete':
            if (!is_dir($path . $directory)) {
                return "Katalog nie istnieje.";
            }
            if (!is_writable($path . $directory)) {
                return "Brak uprawnień do usunięcia katalogu.";
            }
            if (count(scandir($path . $directory)) > 2) {
                return "Katalog nie jest pusty.";
            }
            return rmdir($path . $directory) ? "Katalog został usunięty." : "Wystąpił błąd podczas usuwania katalogu.";
        case 'create':
            if (is_dir($path . $directory)) {
                return "Katalog już istnieje.";
            }
            return mkdir($path . $directory) ? "Katalog został utworzony." : "Wystąpił błąd podczas tworzenia katalogu.";
        default:
            return "Niepoprawny rodzaj operacji.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = isset($_POST['path']) ? $_POST['path'] : '';
    $directory = isset($_POST['directory']) ? $_POST['directory'] : '';
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'read';

    $result = handleDirectory($path, $directory, $operation);
    echo $result;
}

?>
