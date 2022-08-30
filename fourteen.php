<!-- Program for finding the biggest number in an array without using any array functions -->

<?php
    $numbers = array(1,13,15,2,7,56,9,77,1021, 145,22);

    //length of array
    $length = count($numbers);

    for($i = 1; $i < $length; $i++){
        if($numbers[$i] > $numbers[0]){
            $numbers[0] = $numbers[$i];
        }
    }

    echo "The biggest number in given Array is: $numbers[0]";
?>