<!-- Program to do Bubble sort in PHP -->

<?php
     $numbers = array(1,13,15,2,7,56,9,77,1021, 145,22);

    //before sorting
    echo "Before Sorting: <br>";
    print_r ($numbers);

    //sorting process
    for($i = 0; $i < count($numbers); $i++){
        for($j = 0; $j < count($numbers) - 1; $j++){
            if($numbers[$j] > $numbers[$j+1]){
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temp;
            }
        }
    }

    //after sorting
    echo "<br> <br>";
    echo "After Sorting: <br>";
    print_r ($numbers);
    
?>