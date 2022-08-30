<!-- Program to find if the number is Armstrong or not -->

<?php
    $inputNum = 123;

    $total = 0;
    $substituteNum = $inputNum;

    while($substituteNum != 0){
        $rem = $substituteNum % 10; //Modular division to find remainder
        $total = $total + $rem ^ 3;
        $substituteNum = $substituteNum / 10; // Add quotient to $substituteNum
    }

    //Check if the number is Armstrong
    if($inputNum == $total){
        echo "The given number ($inputNum) is Armstrong since the value is equal to the 
                sum of the cubes of the digit.";
    }
    else{
        echo "The given number ($inputNum) is not Armstrong since the value is not equal to the
                 sum of the cubes of the digit.";
    }
?>