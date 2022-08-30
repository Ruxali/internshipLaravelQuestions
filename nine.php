<!-- Program to print inverted pyramid of first 7 numbers -->

<?php
    $size = 7;

    for($i = $size; $i >=1; $i--)
    {
        echo "<br>";  
        for($j = 1; $j <= $i; $j++){

            echo $j," ";  
                               
        }
               
    }
?>