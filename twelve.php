<!-- Program to find factor of any number -->

<?php
    $number = 48;

    echo "The factors of $number are: <br>";

    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            echo $i;
        }
        echo "\t";
    }
?>