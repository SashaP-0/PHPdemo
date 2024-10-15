<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Dice</title>
</head>
<body>
<?php
$diceWords = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six'
];

$randomNumber = rand(1, 6);
echo $diceWords[$randomNumber];
?>

</body>
</html>
