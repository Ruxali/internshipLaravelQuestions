<!-- Program for finding the smallest number in an array  -->

<?php
    $numbers = array(56,77,1021,145,22);

    //length of array
    $length = count($numbers);

    for($i = 1; $i < $length; $i++){
        if($numbers[$i] < $numbers[0]){
            $numbers[0] = $numbers[$i];
        }
    }

    echo "The smallest number in given Array is: $numbers[0]";
?>