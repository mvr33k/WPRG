<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['people_number'] = $_POST['people_number'];
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
<h2>Insert your data here:</h2>
<form method="post" action="">
    <label for="card_number">Card number: </label>
    <input type="number" id="card_number" name="card_number"><br><br>

    <label for="username">Username: </label>
    <input type="text" id="username" name="username"><br><br>

    <label for="people_number">Number of people: </label>
    <input type="number" id="people_number" name="people_number"><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>