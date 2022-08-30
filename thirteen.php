<!-- Program to find table of a number -->

<?php
    $number = 9;

    echo "The table of $number is: <br>";

    for($i=1; $i <=10; $i++){
        $result = $number * $i;
        echo "$number * $i = $result","<br>";
    }
?>