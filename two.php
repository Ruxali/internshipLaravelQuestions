<!-- Program to print Fibonacci series up to  number -->

<?php
    // This is because the two initial values of Fibonacci series is always 0 and 1 respectively.
    $firstNum = 0;
    $secondNum = 1;

    // Number limit
    $endNum = 15;

    echo "The Fibonacci Series upto $endNum is: <br>";

    while($firstNum < $endNum){
        echo "$firstNum <br>";

        $nextNum = $firstNum + $secondNum;
        $firstNum = $secondNum;
        $secondNum = $nextNum;
    }
?>
