<!-- Programt o print Floyd's Triangle -->

<?php
    $noOfRows = 5;

    $number = 1;

    for($i = 1; $i <= $noOfRows; $i++){
        echo "<br>";
        for($j = 1; $j <= $i; $j++){
            echo "$number", " ";
            $number++;
        }
    }

?>