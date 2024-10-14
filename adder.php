<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adder</title>
</head>
<body>

<h2>Simple Adder</h2>

<form method="post" action="">
    <label for="num1">Enter first number:</label>
    <input type="number" id="num1" name="num1" required><br><br>

    <label for="num2">Enter second number:</label>
    <input type="number" id="num2" name="num2" required><br><br>

    <input type="submit" value="Add Numbers">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;
    echo "<p>$num1 + $num2 = $sum</p>";
}
?>

</body>
</html>
