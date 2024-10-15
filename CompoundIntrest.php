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
    
    <label for="final">Desired Balance (£):</label>
    <input type="number" id="final" name="final" step="0.01" required><br><br>

    <label for="interest">Interest Rate:</label>
    <input type="number" id="interest" name="interest" step="0.01" required><br><br>


    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $balance = $_POST['balance'];
    $interest = $_POST['interest'] ; 
    $final = $_POST['final'];

    $year = 1;
    echo "<h3>Starting balance: £" . number_format($balance, 2) . " — Interest rate: " . ($interest * 100) . "%</h3>";

    while ($balance < $final) {
        $balance += $balance * $interest;
        echo "Year $year: New balance = £" . number_format($balance, 2) . "<br>";
        $year++;
    }

    $year--; 
    echo "<h3>It will take $year years to reach £" . number_format($final, 2) . "</h3>";
}
?>

</body>
</html>
