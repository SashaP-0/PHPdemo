<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Grades</title>
</head>
<body>

<form method="post" action="">
    <label for="analysis">Analysis:</label>
    <input type="number" id="analysis" name="analysis" min="0" max="25" required><br>

    <label for="design">Design:</label>
    <input type="number" id="design" name="design" min="0" max="25" required><br>

    <label for="implementation">Implementation:</label>
    <input type="number" id="implementation" name="implementation" min="0" max="25" required><br>

    <label for="evaluation">Evaluation:</label>
    <input type="number" id="evaluation" name="evaluation" min="0" max="25" required><br>

    <input type="submit" value="Calculate Grade">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the marks from user input
    $analysis = $_POST['analysis'];
    $design = $_POST['design'];
    $implementation = $_POST['implementation'];
    $evaluation = $_POST['evaluation'];


    $total = $analysis + $design + $implementation + $evaluation;

    switch (true) {
        case ($total >= 80):
            $grade = "A*"; 
            $nextMarkBand = 100; 
            break;
        case ($totalMarks >= 67):
            $grade = "A";
            $nextMarkBand = 80;
            break;
        case ($totalMarks >= 54):
            $grade = "B";
            $nextMarkBand = 67;
            break;
        case ($totalMarks >= 41):
            $grade = "C";
            $nextMarkBand = 54;
            break;
        case ($totalMarks >= 31):
            $grade = "D";
            $nextMarkBand = 41;
            break;
        case ($totalMarks >= 22):
            $grade = "E";
            $nextMarkBand = 31;
            break;
        case ($totalMarks >= 13):
            $grade = "F";
            $nextMarkBand = 22;
            break;
        case ($totalMarks >= 4):
            $grade = "G";
            $nextMarkBand = 13;
            break;
        default:
            $grade = "U";
            $nextMarkBand = 4;
            break;
    }

    // Calculate how many more marks are needed to get to the next band
    $marksNeeded = $nextMarkBand - $totalMarks;

    // Display the result
    echo "<h3>Results:</h3>";
    echo "<p>Total Marks: $totalMarks</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Marks needed to reach the next grade: $marksNeeded</p>";
}
?>

</body>
</html>
