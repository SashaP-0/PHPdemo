<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest</title>
</head>
<body>
<form method="post" action="">
    <label for="balance">Starting Balance (£):</label>
    <input type="number" id="balance" name="balance" step="0.01" required><br><br>

    <label for="interestRate">Interest Rate:</label>
    <input type="number" id="interestRate" name="interestRate" step="0.01" required><br><br>

    <label for="desiredBalance">Desired Balance (£):</label>
    <input type="number" id="desiredBalance" name="desiredBalance" step="0.01" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $balance = $_POST['balance'];
    $interestRate = $_POST['interestRate'];
    $desiredBalance = $_POST['desiredBalance'];


    $year = 1;
    echo "<h3>Starting balance: £" . number_format($balance, 2) . " — Interest rate: " . ($interestRate * 100) . "%</h3>";

    while ($balance < $desiredBalance) {
        $balance += $balance * $interestRate;
        echo "Year $year: New balance = £" . number_format($balance, 2) . "<br>";
        $year+=1;
    }
    $year -=1;
    echo "<h3>It will take $year years to reach £$desiredBalance </h3>";
}
?>

</body>
</html>
