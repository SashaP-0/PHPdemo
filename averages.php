<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Calculator</title>
</head>
<body>

<h2>Averages</h2>

<form method="post" action="">
    <label for="numCount">How many numbers do you want to average?</label>
    <input type="number" id="numCount" name="numCount" min="1" required><br><br>

    <?php
    if (isset($_POST['numCount']) && $_POST['numCount'] > 0) {
        $numCount = $_POST['numCount'];

        echo "<h3>Enter the numbers:</h3>";
        for ($i = 1; $i <= $numCount; $i++) {
            echo "<label for='num$i'>Number $i:</label>";
            echo "<input type='number' id='num$i' name='numbers[]' required><br><br>";
        }
        echo "<input type='submit' name='calculate' value='Calculate Average'><br><br>";
    }
    ?>

</form>

<?php
if (isset($_POST['calculate']) && !empty($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    $total = array_sum($numbers);

    $A = $total / count($numbers);

    echo "<p>Total: $total</p>";
    echo "<p>Average:  $A </p>"; 
}
?>

</body>
</html>