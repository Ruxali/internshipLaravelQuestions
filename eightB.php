<!-- Program to print inverted pyramid of 15 * -->

<?php
    $size = 15;

    for($i = $size; $i >=1; $i-=2)
    { 
        echo "<br>";  
        for($j = 1; $j <= $i; $j++){

            echo "*"," ";                     
        }       
    }
  
?>