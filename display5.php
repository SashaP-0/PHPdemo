<!DOCTYPE html>
<html>
    <head>
        <title>Dice Output</title>
    </head>
    <body>

    <?php  
    // Define the dice boundary and dots layout
    $dice = [
        "ooooooooooooooo",
        "o                          o",
        "o       #        #       o",
        "o            #            o",
        "o       #        #       o",
        "o                          o",
        "ooooooooooooooo"
    ];

    // Loop through the array and print each line
    foreach ($dice as $line) {
        // Replace spaces with non-breaking spaces (&nbsp;)
        $line_with_spaces = str_replace(" ", "&nbsp;", $line);
        echo nl2br($line_with_spaces . "\n"); // Use nl2br to maintain line breaks
    }
    ?>

    </body>
</html>
