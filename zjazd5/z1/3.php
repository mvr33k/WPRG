<?php
session_start();
$people_number = $_SESSION['people_number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
<p>Card number: <?php echo htmlspecialchars($_SESSION['card_number']); ?></p>
<p>Username: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
<p>Number of people: <?php echo htmlspecialchars($_SESSION['people_number']); ?></p>

<?php for ($num = 1; $num <= $people_number; $num++): ?>
    <h2>Person number <?php echo $num; ?></h2>
    <p>Age: <?php echo htmlspecialchars($_SESSION["person_{$num}_age"]); ?></p>
    <p>City: <?php echo htmlspecialchars($_SESSION["person_{$num}_city"]); ?></p>
<?php endfor; ?>

</body>
</html>