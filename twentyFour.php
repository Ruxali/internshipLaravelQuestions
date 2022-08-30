<!-- Program to find second highest number in array -->

<?php
    $numbers = array(1,13,15,2,7,56,9,77,1021, 145,22);

    //length of array
    $length = count($numbers);

    for($i = 1; $i < $length; $i++){
        for($j = $i + 1; $j <$length; $j++){
            if($numbers[$i] > $numbers[$j]){
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
        
    }

    echo "The second biggest number in given Array is: ", $numbers[$length-2];
?>