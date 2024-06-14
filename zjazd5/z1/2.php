<?php
session_start();

$people_number = $_SESSION['people_number'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($num = 1; $num <= $people_number; $num++) {
        $_SESSION["person_{$num}_city"] = $_POST["person_{$num}_city"];
        $_SESSION["person_{$num}_age"] = $_POST["person_{$num}_age"];
    }
    header('Location: 3.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
<h2>Insert data for all people: </h2>
<form method="post" action="">
    <?php for ($num = 1; $num <= $people_number; $num++): ?>
        <h2>Person <?php echo $num; ?></h2>
        <label for="person_<?php echo $num; ?>_city">City: </label>
        <input type="text" id="person_<?php echo $num; ?>_city" name="person_<?php echo $num; ?>_city"><br>

        <label for="person_<?php echo $num; ?>_age">Age:</label>
        <input type="number" id="person_<?php echo $num; ?>_age" name="person_<?php echo $num; ?>_age"><br>
    <?php endfor; ?>
    <br>
    <button type="submit">Save</button>
</form>
</body>
</html>