<!-- Program to reverse a number -->

<?php
    //Function to reverse a number
    function reverseNumber($number){
        $revNumber = $number;
        $result = 0;

        while($revNumber > 1){
            $rem = $revNumber % 10;
            $result = $result * 10 + $rem;
            $revNumber = $revNumber/10;
        }
        return $result;
    }

    $number = 1021;
    echo "The original number is: $number <br>";
    echo "The reversed number is: ", reverseNumber($number);
?>