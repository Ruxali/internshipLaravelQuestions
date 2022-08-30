<!-- Program to print half pyramid of 8 numbers -->

<?php
    $size = 8;

    for($i = 1; $i <=$size; $i++)
    {
        echo "<br>";  
        for($j = 1; $j <= $i; $j++){

            echo $j," ";  
                               
        }
               
    }
?>