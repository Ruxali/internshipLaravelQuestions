<!-- Program to swap two numbers -->

<?php
    
    $num1 = 10;
    $num2 = 21;

    //before swapping
    echo "Before Swapping: <br>";
    echo "First number: $num1 <br>";
    echo "Second number: $num2 <br><br>";

    //swapping process
    $temp = 0;
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    //after swapping
    echo "After Swapping: <br>";
    echo "First number: $num1 <br>";
    echo "Second number: $num2 <br>";
?>